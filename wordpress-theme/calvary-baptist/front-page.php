<?php get_header(); ?>

<div class="hero">
  <div class="hero-img" style="background-image:url('https://calvarybaptistchurchmedford.org/wp-content/uploads/2024/01/IMG_1178-1024x768.jpeg');"></div>
  <div class="hero-overlay"></div>
  <div class="hc">
    <div class="hbadge"><span class="ldot"></span>Live Sunday at 11 AM &nbsp;·&nbsp; Medford, NY</div>
    <h1>To Know Christ.<br><em>To Make Him Known.</em></h1>
    <p class="hsub">A warm, Bible-teaching community in Medford, Long Island. Wherever you are in your faith journey — you are welcome here.</p>
    <div class="hbtns">
      <a class="hbp" href="<?php echo esc_url( home_url('/contact') ); ?>">Plan Your Visit</a>
      <a class="hbo" href="https://youtube.com/@calvarybaptistchurchofmedf6538" target="_blank">Watch on YouTube</a>
    </div>
  </div>
</div>

<div class="sbar">
  <div class="si"><div class="sl">Adult Sunday School</div><div class="sv">10:00 AM</div></div><div class="sdi"></div>
  <div class="si"><div class="sl">Morning Service</div><div class="sv">11:00 AM</div></div><div class="sdi"></div>
  <div class="si"><div class="sl">Evening Service</div><div class="sv">6:00 PM</div></div><div class="sdi"></div>
  <div class="si"><div class="sl">Men's Ministry (Tue)</div><div class="sv">7:30 PM</div></div><div class="sdi"></div>
  <div class="si"><div class="sl">Prayer &amp; Bible Study (Wed)</div><div class="sv">7:30 PM</div></div>
</div>

<div class="sfeat">
  <div class="svis">
    <div class="svis-img" style="background-image:url('https://calvarybaptistchurchmedford.org/wp-content/uploads/2024/01/IMG_3569-2-e1704830554187-768x1024.png');"></div>
    <div class="svis-overlay"></div>
    <div class="svc">
      <div class="ssl">Current Sermon Series</div>
      <div class="sst">A Study Through Matthew</div>
      <div class="sss">Pastor Chris Pandolfi</div>
      <a class="plb" href="https://youtube.com/@calvarybaptistchurchofmedf6538" target="_blank"><div class="plt"></div></a>
    </div>
  </div>
  <div class="sinf">
    <div class="sey2">Latest Sermon</div>
    <div class="stit">Preaching Through the Gospel of Matthew</div>
    <div class="smt">Pastor Chris Pandolfi · Sunday Mornings at 11 AM</div>
    <p class="sds">Join Pastor Chris each Sunday as he preaches through the Gospel of Matthew. All sermons are available to watch on our YouTube channel after each service.</p>
    <a class="slk" href="https://youtube.com/@calvarybaptistchurchofmedf6538" target="_blank">Watch on YouTube →</a>
    <div style="margin-top:28px;">
      <div style="font-size:10px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.4);margin-bottom:10px;">Also available on Spotify</div>
      <iframe style="border-radius:12px;display:block;" src="https://open.spotify.com/embed/show/644cvumZllhrKayhev3bA8?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
  </div>
</div>

<div class="sec">
  <div class="sh"><div><div class="ey">Coming Up</div><div class="st">Events at Calvary</div></div><a class="sa" href="<?php echo esc_url( home_url('/events') ); ?>">View All →</a></div>
  <div class="evl">
    <?php
    $events = get_posts( array(
      'post_type'      => 'tribe_events',
      'posts_per_page' => 3,
    ) );
    if ( $events ) :
      foreach ( $events as $event ) :
        $date = get_post_meta( $event->ID, '_EventStartDate', true );
        $month = $date ? strtoupper( date( 'M', strtotime( $date ) ) ) : '';
        $day   = $date ? date( 'j', strtotime( $date ) ) : '';
        $time  = $date ? date( 'g:i A', strtotime( $date ) ) : '';
    ?>
    <div class="evc">
      <div class="evd"><div class="evm"><?php echo esc_html( $month ); ?></div><div class="evn"><?php echo esc_html( $day ); ?></div></div>
      <div class="evi">
        <div class="evt"><?php echo esc_html( $event->post_title ); ?></div>
        <div class="evmt"><?php echo esc_html( $time ); ?></div>
      </div>
    </div>
    <?php endforeach; else : ?>
    <div class="evc"><div class="evd"><div class="evm">SUN</div><div class="evn">11</div></div><div class="evi"><div class="evt">Morning Worship Service</div><div class="evmt">11:00 AM · Main Sanctuary</div></div><div class="evtg">Worship</div></div>
    <div class="evc"><div class="evd"><div class="evm">TUE</div><div class="evn"> </div></div><div class="evi"><div class="evt">Men's Ministry</div><div class="evmt">7:30 PM · Weekly</div></div><div class="evtg">Ministry</div></div>
    <div class="evc"><div class="evd"><div class="evm">WED</div><div class="evn"> </div></div><div class="evi"><div class="evt">Prayer &amp; Bible Study</div><div class="evmt">7:30 PM · Weekly</div></div><div class="evtg">Bible Study</div></div>
    <?php endif; ?>
  </div>
</div>

<div class="sec alt">
  <div class="ey">Our Community</div><div class="st">Life at Calvary</div>
  <div class="pgrid">
    <img src="https://calvarybaptistchurchmedford.org/wp-content/uploads/2024/02/Music-Team-2-1-1024x451.png" alt="Calvary Worship" style="width:100%;height:260px;object-fit:cover;border-radius:10px;" loading="lazy">
    <img src="https://calvarybaptistchurchmedford.org/wp-content/uploads/2025/08/VBS-2025-6-1024x613.png" alt="VBS 2025" style="width:100%;height:260px;object-fit:cover;border-radius:10px;" loading="lazy">
    <img src="https://calvarybaptistchurchmedford.org/wp-content/uploads/2025/07/fam-fun-day-2025-895x1024.png" alt="Family Fun Day 2025" style="width:100%;height:260px;object-fit:cover;object-position:top;border-radius:10px;" loading="lazy">
  </div>
</div>

<div class="sec">
  <div class="sh"><div><div class="ey">Get Connected</div><div class="st">Ministries</div></div><a class="sa" href="<?php echo esc_url( home_url('/ministries') ); ?>">View All →</a></div>
  <div class="mgr">
    <a class="mc" href="<?php echo esc_url( home_url('/sunday-school') ); ?>"><div class="mi">✝</div><div class="mn">Sunday School</div><div class="md">For all ages, every Sunday at 10:00 AM</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/childrens-ministry') ); ?>"><div class="mi">🧒</div><div class="mn">Children's Ministry</div><div class="md">Kids Church during Sunday services</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/womens-ministry') ); ?>"><div class="mi">👩</div><div class="mn">Women's Ministry</div><div class="md">Fellowship, accountability and God's Word</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/mens-ministry') ); ?>"><div class="mi">👨</div><div class="mn">Men's Ministry</div><div class="md">Meets Tuesday evenings for fellowship and study</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/music-ministry') ); ?>"><div class="mi">🎵</div><div class="mn">Music Ministry</div><div class="md">Choir and worship team</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/missions') ); ?>"><div class="mi">🌍</div><div class="mn">Missions</div><div class="md">Local and global outreach</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/bible-study') ); ?>"><div class="mi">📖</div><div class="mn">Bible Study</div><div class="md">Wednesday evenings at 7:30 PM</div></a>
    <a class="mc" href="<?php echo esc_url( home_url('/family-ministry') ); ?>"><div class="mi">👨‍👩‍👧‍👦</div><div class="mn">Family Ministry</div><div class="md">Events and programs for families</div></a>
  </div>
</div>

<?php get_footer(); ?>
