<?php 
    date_default_timezone_set('UTC');
    setlocale(LC_ALL, 'fr_FR');
    $d1 = $page->date('U','startDate'); 
    $d2 = $page->date('U', 'endDate');
    if ($page->endDate()->isEmpty()) {
        # No second date
        echo strftime('%e %B %G',$d1);
    } elseif ($page->date('Y-m-d','startDate') === $page->date('Y-m-d','endDate')) {
        # Same day
        echo strftime('%e %B %G',$d1);
    } elseif ($page->date('Y-m','startDate') === $page->date('Y-m','endDate')) {
        # Same calendar month
        echo strftime('%e',$d1) . strftime('/%e %B %G',$d2);
    } elseif ($page->date('Y','startDate') === $page->date('Y','endDate')) {
        # Same calendar year
        echo strftime('%e %B',$d1) . strftime(' / %e %B %G',$d2);
    } else {
        # General case (spans calendar years)
        echo strftime('%e %B %G',$d1) . strftime(' / %e %B %G',$d2);
    }

?>