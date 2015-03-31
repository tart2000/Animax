<?php if(!defined('KIRBY')) exit ?>

title: Member
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
  site: 
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
    type: text
    width: 1/2
  text:
    label: Text
    type:  textarea
