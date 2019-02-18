import re
import os
import requests
from bs4 import BeautifulSoup
import smtplib


def readFile(file):
    with open(file, "r") as fichier:
        texte = fichier.read()
    print(texte)


def writeFile(file, string):
    with open(file, "a") as fichier:
        fichier.write("\n" + str(string))


def verifMail(mail):
    return re.match(r"^[a-zA-Z0-9_\-]+(\.[a-zA-Z0-9_\-]+)*@[a-zA-Z0-9_\-]+(\.[a-zA-Z0-9_\-]+)*(\.[a-zA-Z]{2,6})$", mail)


def testPing(domaine):
    domaine = domaine.split('@')
    test = os.system("Ping " + domaine[1])
    if test == 0:
        return False
    return True


def doublons(liste):
    propre = list(set(liste))

    return propre


def crawl(page, link):
    if page > 0:
        recupPage = requests.get(link)
        contenu = recupPage.text
        s = BeautifulSoup(contenu, "html.parser")
        d = s.findAll('a')
        for link in d:
            mail = str(link.get('href'))
            if mail.startswith('mailto'):
                print(mail[7:])

def sendMail():

    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.starttls()
    server.login("bonix.dan@gmail.com", "nadix@spoutnik97")

    msg = "COUCOU TOI !"
    server.sendmail("bonix.dan@gmail.com", "contact.nadix@gmail.com", msg)
    server.quit()

crawl(1, 'http://univcergy.phpnet.org/python/mail.html')

'''ajout = input("Saisissez une adresse mail à ajouter")
while not verifMail(ajout):
    ajout = input("Erreur ! Saisissez une adresse mail valide")
while not testPing(ajout):
    ajout = input("Erreur ! Le nom de domaine n'est accessible. Veuillez réessayer")'''
