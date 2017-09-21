


<?php $colors = array('bg-blue','bg-orange','bg-green', 'bg-dkblue', 'bg-dkgray', 'bg-ltblue', 'bg-tan','bg-dkgray','bg-dkgray'); ?>

<aside aria-label="Left Sidebar" class="hidden-xs left-sidebar">
<h1>{{$person->name}}</h1>

      <?php $news_color = false;  ?>

      @if(!empty($person->Link1))

        <div style="background-color: green;"><a href="#news" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">News</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->
        <?php $news_color = true;  ?>
      @endif

      @if(!empty($person->Link2))

        <div style="background-color: orange;"><a href="#events" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Events</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->
      @endif

      @if(!empty($person->Link3))

        <div style="background-color: pink;"><a href="#publications" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Publications</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->

      @endif

      @if(!empty($person->Link4))

        <div style="background-color: gray;"><a href="#extras" title="" data-toggle="tab">
          <div class="inner"><span class="linktext active"><span class="linklabel">Extras</span></span></div>
          <!-- end inner --></a></div>
        <!-- end navbox -->

      @endif
