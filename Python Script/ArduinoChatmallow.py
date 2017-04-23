# -*- coding: latin-1-*-
"""
Created on Mon Feb 13 16:08:47 2017

@author: Kyomao
"""

import requests, serial, json, time

##Definition du serial: 9600 bauds, 8 bits de donnée, pas de parité et un bit de stop##
ser = serial.Serial('COM9', 9600)
storageList = []

def do_action(action_id):
    """Permet d'envoyer une commande au serial de la carte arduino:
        - 3 allume la fontaine
        - 4 force la distribution de croquettes
    """
    while True:
        if ser.inWaiting() == 0:
            return  ser.writelines(str(action_id))
        else:
            storageList.append(json.loads(ser.readline()))

def api_call(data_to_send=0):
    """Permet de demander à l'API les actions à faire ou envoyer des donnés au serveur.
    """
    if data_to_send == 0:
        return requests.get('http://localhost/api/actions',
                            headers={"Authorization":"Bearer AZERTYUIOP"}).json()
    else:
        if data_to_send["update"]:
            return  requests.get('http://localhost/api/update/state/'+str(data_to_send['data']['id']),
                            headers={"Authorization":"Bearer AZERTYUIOP"})
        else:
            requests.get('http://localhost/api/update/water/'+str(data_to_send['data']['eau']),
                            headers={"Authorization":"Bearer AZERTYUIOP"})
            requests.get('http://localhost/api/update/food/'+str(data_to_send['data']['eau']),
                            headers={"Authorization":"Bearer AZERTYUIOP"})
            return do_action(requests.get('http://localhost/api/cateat/'+str(data_to_send['data']['badgeID']),
                            headers={"Authorization":"Bearer AZERTYUIOP"}))

##Programme##
while True:
    if len(storageList) != 0:
        api_call({"update": 0, "data": storageList.pop(0)})
    elif ser.inWaiting() != 0:
        storageList.append(json.loads(ser.readline()))
    else:
        for request in api_call()['data']:
            if str(request['type']) in str(range(3, 5)):
                do_action(int(request['type']))
            api_call({"update": 1, "data": request})
    time.sleep(2)
