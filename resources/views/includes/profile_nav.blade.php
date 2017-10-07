<div class="board-inner">
    <ul class="nav nav-tabs" id="myTab">
        <div class="liner"></div>
        <li class="{{ Helper::check_route('personal') ? 'active' : '' }}">

            <a href="personal" data-toggle="" title="Personal Details">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span>
            </a></li>

        <li class="{{ Helper::check_route('contact') ? 'active' : '' }}">
            <a href="contact" data-toggle="" title="Contact Details">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span>
            </a>
        </li>
        <li class="{{ Helper::check_route('education') ? 'active' : '' }}">
            <a href="education" data-toggle="" title="Educational Details">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
        </li>

        <li class="{{ Helper::check_route('profession') ? 'active' : '' }}">
            <a href="profession" data-toggle="" title="Professional Details">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span>
            </a></li>

        <li class="{{ Helper::check_route('partner') ? 'active' : '' }}">
            <a href="partner" data-toggle="" title="Partner Details">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
        </li>

    </ul></div>
