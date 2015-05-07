<div class="large-4 columns notification">
  <div class="title"> Updates </div>
  <ul>
    <li> Jeff has approved your request for reservation of unit 208 @ Bldg 2, Lumiere Residences for Mrs. Maria Elena. </li>
    <li> San Luis has denied your request for reservation of unit 301 @ Bldg 2, Lumiere Residences for Mr. Francis Bonayon. </li>
    <li> Unit 208, Unit 301, Unit 597 @ Bldg 2, Lumiere Residences has been sold on March 31, 2014. </li>
    <li> Jeff has approved your request for reservation of unit 531 @ Bldg 2, Lumiere Residences for Mrs. Maria Magdalena. </li>
    <li> Faith has approved your request for reservation of unit 208 @ Bldg 2, Lumiere Residences for Mrs. Maria Elena. </li>
    <a href="#" class="button right"> Read More </a>
  </ul>
</div>

<div class="large-8 columns featured-article">
  <div class="title"> News </div>
  <div class="articles" ng-controller="newsPageController">
    <article class="large-12 article row" ng-repeat="news in newsPage.response track by news.node.nid">
      <div class="large-5 columns">
        <div class="image" style="background: url({{news.node.image}}) center center; background-size: cover;"></div>
      </div>
      <div class="large-7 columns read-more">
        <div class="title">{{news.node.title}}</div>
        <div class="date">{{news.node.term }} | {{news.node.date }}</div>
        <div class="excerpt">{{news.node.body}}</div>
        <a href="{{news.node.path}}" class="button"> Read More </a>
      </div>
    </article>
  </div>
</div>
