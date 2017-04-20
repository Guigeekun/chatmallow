# -*- coding: latin-1-*-
"""
Created on Mon Feb 13 16:08:47 2017

@author: Kyomao
"""

import requests, serial, json, time

##Definition du serial: 9600 bauds, 8 bits de donnée, pas de parité et un bit de stop##
SER = serial.Serial('COM9', 9600)
STORE_LIST = []


def do_action(action_id):
    """Permet d'envoyer une commande au serial de la carte arduino:
        - 3 allume la fontaine
        - 4 force la distribution de croquettes
    """
    while True:
        if SER.inWaiting() == 0:
            SER.writelines(str(action_id))
            return
        else:
            STORE_LIST.append(SER.readlines())

def api_call(data_to_send=0):
    """Permet de demander à l'API les actions à faire ou envoyer des donnés au serveur.
    """
    if data_to_send == 0:
        return requests.get('http://localhost/api/actions',
                            headers={"Authorization":"Bearer AZERTYUIOP"}).json()
    else:
        return data_to_send

##Programme##
while True:
    if len(STORE_LIST) != 0:
        api_call({"update": 0, "data": STORE_LIST.pop(0)})
    elif SER.inWaiting() != 0:
        api_call({"update": 0, "data": json.loads(SER.readline())})
    else:
        for request in api_call()['data']:
            if str(request['type']) in str(range(3, 5)):
                do_action(int(request['type']))
                api_call({"update": 1, "data": request})
    time.sleep(2)
