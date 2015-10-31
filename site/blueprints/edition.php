<?php if(!defined('KIRBY')) exit ?>

title: Edition
pages: 
  template: partner
files: true
fields:
  title:
    label: Titre
    type:  text
  postimage:
    label: Image de couverture
    type:  selector
    mode:  single
    types:
        - image
  text:
    label: Texte
    type:  textarea
  location: 
    label: Endroit de l'événement
    type: text
    width:1/2
  locationLink:
    label: Lien vers l'endroit
    type: Url
    width: 1/2
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
