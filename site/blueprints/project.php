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
  text:
    label: Text
    type:  textarea
  videolink:
    label: Code Vimeo (ex. 548839003)
    type: text
  team: 
    label: Equipe 
    type: text
  facilitator: 
    label: Facilitateur 
    type: text
  tags:
    label: Tags
    type:  tags