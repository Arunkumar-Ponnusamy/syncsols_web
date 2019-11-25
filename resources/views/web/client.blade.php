@include('layouts.header')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  .logo
{
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
   -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -o-transition: all .5s ease;
  -ms-transition: all .5s ease;
  transition: all .5s ease;
  cursor:pointer;
}


.logo:hover
{
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
}
</style>

<legend align="center">Our Happy Client's</legend>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
  @foreach($clients as $index => $client)
    @if($index%6==0)
    <div class="item @if($index==0) {{'active'}} @endif container">
    @endif
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="{{img($client->picture)}}" alt="...">    
    @if(($index+1)%6==0)
    </div>
    @endif
  @endforeach
<!--     <div class="item active container">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
    </div>
    
    <div class="item container">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
      </div>
    
    <div class="item container">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1/p160x160/1010549_378823185552943_1788436797_n.png" alt="...">
     </div> -->
    
  </div>

    <div align="center" style="margin-top:20px;">
    <!-- Controls -->
          @if(count($clients)>6)
          <a class="left" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          @endif
    </div>
  
</div>
    <!---728x90--->
<script type="text/javascript">
  $('.carousel').carousel()
</script>
@include('layouts.footer')