<?php if(!defined('KIRBY')) exit ?>

title: Edition
pages: 
  template: 
    - partner
    - horaire
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
    width: 1/2
  projectLabel:
    label: Tag de projets
    type: text
    width: 1/2
  video: 
    label: lien vers la vidéo
    type: url
    width: 1/2
  photos:
    label: lien vers les photos
    type: url
    width: 1/2
