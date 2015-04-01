<?php if(!defined('KIRBY')) exit ?>

title: Edition
pages: 
  template: partner
files: true
fields:
  title:
    label: Titre
    type:  text
  text:
    label: Texte
    type:  textarea
  location: 
    label: Endroit de l'événement
    type: text
  startDate: 
    label: Date de départ
    type: date
    width: 1/2
  endDate: 
    label: Date de fin
    type: date
    width: 1/2
  inscriptions: 
    label: Lien pour inscriptions
    type: Url
  projectLabel:
    label: Tag de projets
    type: text
    width: 1/2
  vimeoLink: 
    label: Code Vimeo (ex.457843392)
    type: text
    width: 1/2
