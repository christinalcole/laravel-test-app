


<?php $colors = array('green','orange','pink', 'gray'); ?>

<aside aria-label="Left Sidebar" class="hidden-xs left-sidebar">
<h1>{{$person->name}}</h1>

      <?php $news_color = false;  ?>

      @if(!empty($person->Link1))

        <div style="background-color: {{$colors[0]}};"><a href="#news" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">News</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->
        <?php $news_color = true;  ?>
      @endif

      @if(!empty($person->Link2))

        <div style="background-color: {{$colors[1]}};"><a href="#events" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Events</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->
      @endif

      @if(!empty($person->Link3))

        <div style="background-color: {{$colors[2]}};"><a href="#publications" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Publications</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link4))

        <div style="background-color: {{$colors[3]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Extras</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->

      @endif
