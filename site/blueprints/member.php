<?php if(!defined('KIRBY')) exit ?>

title: member
pages: false
files:
  sortable: true
fields:
  title:
    label: Nom Prénom
    type:  text
  boite: 
    label: Entreprise
    type: text
  position:
    label: Description rapide 
    type: text
  website: 
    label: Site personnel
    type: Url 
    width: 1/2
  courriel:
    label: Courriel
    type: email
    width: 1/2
  linkedin: 
    label: Linkedin
    type: Url
    width: 1/2
  tel: 
    label: Numéro de téléphone
    type: tel
    width: 1/2
  text:
    label: Text
    type:  textarea
