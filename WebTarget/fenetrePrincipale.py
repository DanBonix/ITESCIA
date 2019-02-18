from tkinter import *
import tkinter as tk
from tkinter import font
import WebTarget

class interface(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title('Interface')

        self.font = font.Font(family='Helvetica', size=13)
        self.geometry('500x500')

        buttonDoublon = Button(self, text="Dédoublonner", font=self.font, command= lambda: WebTarget.doublons())
        buttonDoublon.pack()

        buttonValider = Button(self, text="Valider")
        buttonValider.pack()

        buttonCSV = Button(text="Import CSV")
        buttonCSV.pack()

        buttonURL = Button(text="Import URL")
        buttonURL.pack()

