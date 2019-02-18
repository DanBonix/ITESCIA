import tkinter as tk
from tkinter import font
import fenetrePrincipale


class accueil(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title('Home')

        self.fontTitle = font.Font(family='Helvetica', size=28)
        self.fontName = font.Font(family='Helvetica', size=15)
        self.campagne = tk.StringVar()
        self.geometry("500x500")

        self.labelTitre = tk.Label(self, text="Nom de la campagne", font=self.fontTitle)

        self.inputSaisie = tk.Entry(self, textvariable=self.campagne, justify="center", width=40, font=self.fontName)

        self.button = tk.Button(self, text="OK", font=self.fontName, command=lambda: fenetrePrincipale.interface().mainloop())

        self.labelTitre.place(x=75, y=150)
        self.inputSaisie.place(x=25, y=220)
        self.button.place(x=210, y=300)


home = accueil()
home.mainloop()
