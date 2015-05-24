<div class="reservation-list large-11 columns large-centered" ng-controller="reservationListController">
  <table width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Unit</th>
        <th>Development</th>
        <th>Reservation Date</th>
        <th>Reserved By</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

      <tr ng-repeat="list in reservationList.response">
        <td>{{list.node.firstName}} {{list.node.lastName}}</td>
        <td>{{list.node.unit}}</td>
        <td>{{list.node.development}}</td>
        <td>{{list.node.date}}</td>
        <td>{{list.node.name}}</td>
        <td>{{list.node.status}}</td>
      </tr>

    </tbody>
  </table>
</div>