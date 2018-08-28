<div class="row">
      <div class="large-12 medium-12 columns main-container">
        <!-- Grid Example -->

        <div class="row vertical-feature-block">
          <div class="large-3 medium-3 columns imageBlock">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <h5 class="feature-block-header">News</h5>
              <p>All the latest information regarding both UNICAM and ERSU events and deadlines!</p>
          </div>
          <div class="large-3 medium-3 columns imageBlock">
            <i class="fa fa-comments-o" aria-hidden="true"></i>
            <h5 class="feature-block-header">Forum</h5>
              <p>A place to discuss and share experiences with other students and teachers!</p>
          </div>
          <div class="large-3 medium-3 columns imageBlock">
            <i class="fa fa-info" aria-hidden="true"></i>
            <h5 class="feature-block-header">Information</h5>
              <p>Explanations for procedures international students have to go through!</p>
          </div>
          <div class="large-3 medium-3 columns imageBlock">
            <i class="fa fa-map" aria-hidden="true"></i>
            <h5 class="feature-block-header">Map</h5>
              <p>All locations you will need to know about in Camerino, including traveling tips!</p>
          </div>
        </div>
</br>
        <div class="row">
          <div class="large-8 medium-8 columns">
            <h3>Latest News & Events</h3>
            <br>
            <?php 
              for($i=0;$i<$news['num_rows'];$i++) echo '<div class="news-item"><h4>'.$news[$i]['newsTitle'].'</h4><p>'.$news[$i]['newsContent'].'</p><a href="'.BASE_URL.'article/'.$news[$i]['ID'].'" class="button">Read more</a></div>'; 
            ?>
            
          </div>
          <div class="large-4 medium-4 columns" style="text-align: center;">
            <img src="http://international.unicam.it/sites/d7.unicam.it.international/files/banner_donate.jpg">
            <img src="http://international.unicam.it/sites/d7.unicam.it.international/files/banner_donate.jpg">
            <img src="http://international.unicam.it/sites/d7.unicam.it.international/files/banner_donate.jpg">
            <img src="http://international.unicam.it/sites/d7.unicam.it.international/files/banner_donate.jpg">
          </div>
        </div>
<br>
        <div class="row contact-home">
          <div class="large-12 medium-12 columns" style="text-align:center;"><h3>Contact Us</h3></div>
          <div class="row">
            <div class="large-4 medium-4 columns" style="text-align: center;">
              <div class="row">
                <h6 class="title-row">Welcome Office</h6>
                <p class="person person-name">Fiorella Paino</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> fiorella.paino@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404609</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404600</p>
              </div>
              <div class="row">
                <p class="person person-name">Yanting Zuo</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> china@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404621</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404610</p>
              </div>
            </div>
            <div class="large-4 medium-4 columns" style="text-align: center;">
              <div class="row">
                <h6 class="title-row">Erasmus Office</h6>
                <p class="person person-name">Fiorella Paino</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> fiorella.paino@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404609</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404600</p>
              </div>
              <div class="row">
                <p class="person person-name">Fiorella Paino</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> fiorella.paino@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404609</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404600</p>
              </div>
            </div>
            <div class="large-4 medium-4 columns" style="text-align: center;">
              <div class="row">
                <h6 class="title-row">International Cooperation</h6>
                <p class="person person-name">Fiorella Paino</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> fiorella.paino@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404609</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404600</p>
              </div>
              <div class="row">
                <h6 class="title-row">Language services & Cambridge Centre</h6>
                <p class="person person-name">Fiorella Paino</p>
                <p class="person person-email"><i class="fa fa-envelope" aria-hidden="true" style="color:#c60b22;"></i> fiorella.paino@unicam.it</p>
                <p class="person person-tel"><i class="fa fa-phone-square" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404609</p>
                <p class="person person-fax"><i class="fa fa-fax" aria-hidden="true" style="color:#c60b22;"></i> +39 0737 404600</p>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>