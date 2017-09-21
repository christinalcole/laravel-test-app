


<?php $colors = array('green','orange','pink', 'gray', 'black');
  $i = 0; ?>


<aside aria-label="Left Sidebar" class="hidden-xs left-sidebar">
<h1>{{$person->name}}</h1>

      <!-- <?php $news_color = false;  ?> -->

      @if(!empty($person->Link1))



        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#news" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">News</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

        <!-- <?php $news_color = true;  ?> -->
      @endif

      @if(!empty($person->Link2))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#events" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Events</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->
      @endif

      @if(!empty($person->Link3))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#publications" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Publications</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link4))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Extras</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link5))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Link5</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link6))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Link6</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link7))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Link7</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link8))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Link8</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link9))

        <div style="background-color: {{$colors[($i%count($colors))]}};"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Link9</span></span></div>
          <!-- end inner --></a></div>
          <? ++$i ?>
        <!-- end navbox -->

      @endif
