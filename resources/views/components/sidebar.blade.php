<div class="col-4">
  <div class="position-sticky" style="top: 6rem;">
    <div class="sidebox">
      <form action="/blog" class="search-section">
        <input class="search" name="search" value="{{ request('search') }}" type="text" placeholder="&#xF002;     Search" style="font-family:Inter, FontAwesome;" aria-label="Search">
      </form> 
      <div class="sidebar-bottom">
        <h5>Who to follow</h5>
        <div class="profile1">
          <img src="{{ URL::asset('images/gojou.gif') }}" alt="profile">
          <div class="profile-detail">
            <h6>Dafa Armanto</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, inventore. </p>
          </div>
          <div class="profile-button">
            <button type="button">Follow</button>
          </div>
        </div>
        <div class="profile1">
          <img src="{{ URL::asset('images/gojou.gif') }}" alt="profile">
          <div class="profile-detail">
            <h6>Dafa Armanto</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, inventore.</p>
          </div>
          <div class="profile-button">
            <button type="button">Follow</button>
          </div>
        </div>
        <div class="profile1">
          <img src="{{ URL::asset('images/gojou.gif') }}" alt="profile">
          <div class="profile-detail">
            <h6>Dafa Armanto</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, inventore.</p>
          </div>
          <div class="profile-button">
            <button type="button">Follow</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>