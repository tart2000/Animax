<?php 
    date_default_timezone_set('UTC');
    setlocale(LC_ALL, 'fr_FR');
    $d1 = $edition->date('U','startDate'); 
    $d2 = $edition->date('U', 'endDate');
    if ($edition->endDate()->isEmpty()) {
        # No second date
        echo strftime('%e %B %G',$d1);
    } elseif ($edition->date('Y-m-d','startDate') === $edition->date('Y-m-d','endDate')) {
        # Same day
        echo strftime('%e %B %G',$d1);
    } elseif ($edition->date('Y-m','startDate') === $edition->date('Y-m','endDate')) {
        # Same calendar month
        echo strftime('%e',$d1) . strftime('/%e %B %G',$d2);
    } elseif ($edition->date('Y','startDate') === $edition->date('Y','endDate')) {
        # Same calendar year
        echo strftime('%e %B',$d1) . strftime(' / %e %B %G',$d2);
    } else {
        # General case (spans calendar years)
        echo strftime('%e %B %G',$d1) . strftime(' / %e %B %G',$d2);
    }

?>