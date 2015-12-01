<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  baseline:
    label: Baseline 
    type: text
  projectimage:
    label: Image de couverture
    type:  selector
    mode:  single
    types:
        - image
    width: 1/2
  teamimage:
    label: Image de l'équipe
    type:  selector
    mode:  single
    types:
        - image
    width:1/2
  text:
    label: Text
    type:  textarea
  video:
    label: URL de la vidéo (Youtube ou Vimeo)
    type: url
  team: 
    label: Équipe (nom, séparés par des virgules. ex. John Doe, Michaël Bloomberg)
    type: text
  facilitator: 
    label: Facilitateur 
    type: text
  tags:
    label: Tags
    type:  tags