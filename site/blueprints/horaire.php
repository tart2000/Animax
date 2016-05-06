<?php if(!defined('KIRBY')) exit ?>

title: Horaire
pages: false
files: false
fields:
  	title:
	    label: titre
	    type:  text
 	day1:
	    label: Premier jour
	    type: structure
	    entry: >
	      {{heure}} - {{nom}} 
	    fields:
	      heure:
	        label: Heure
	        type: time
	        interval: 30
	      nom:
	        label: Titre
	        type: text
	      desc:
	        label: Description
	        type: textarea
	day2:
	    label: Deuxième jour
	    type: structure
	    entry: >
	      {{heure}} - {{nom}} 
	    fields:
	      heure:
	        label: Heure
	        type: time
	        interval: 30
	      nom:
	        label: Titre
	        type: text
	      desc:
	        label: Description
	        type: textarea
