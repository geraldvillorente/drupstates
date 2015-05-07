<div ng-controller="userController" class="contacts row">
  <div class="large-10 columns large-centered">
    <div ng-repeat="profile in user.response track by profile.user.uid">
      <div class="contact-info">
        <img src="/sites/default/files/dmci-logo_1.jpg" class="profile-logo" />
        <div class="large-3 columns">
          <center>
            <img src="{{profile.user.image}}" />
            <div><a href="/user/{{profile.user.uid}}/edit/main" class="button back"> EDIT PROFILE </a></div>
          </center>
        </div>
        <div class="large-9 columns">
          <p class="title"> Contact Information </p>
          <div class="field row"> <div class="large-3 columns"> Name: </div>  <div class="large-9 columns">{{profile.user.name}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Email: </div>  <div class="large-9 columns">{{profile.user.email}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Contact: </div>  <div class="large-9 columns">{{profile.user.contact}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Website: </div>  <div class="large-9 columns">{{profile.user.website}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Birthday: </div>  <div class="large-9 columns">{{profile.user.birthday}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Position: </div>  <div class="large-9 columns">{{profile.user.position}}</div> </div>
          <div class="field row"> <div class="large-3 columns"> Department: </div>  <div class="large-9 columns">{{profile.user.department}}</div> </div>
          <p class="title"> Additional Information </p>
          <div class="field row"> <div class="large-3 columns"> City: </div>  <div class="large-9 columns">Manila</div> </div>
          <div class="field row"> <div class="large-3 columns"> Skills: </div>  <div class="large-9 columns">Eating, Sleeping, Reading, Coding, Playing, Etc</div> </div>
          <div class="field row"> <div class="large-3 columns"> Interest: </div>  <div class="large-9 columns">Programming, Music, Dota 2</div> </div>
        </div>
        <div class="clear-both"> </div>
      </div>
    </div>
  </div>
</div>
