<div class="header-bottom hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">

                <div class="vertical-menu vertical-category-block">
                    <div class="block-title">
                        <span class="menu-icon">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </span>
                        <span class="menu-title">All departments</span>
                        <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-menu">
                        <ul class="menu clone-main-menu">

                            <?php foreach ($ctg_datas as $ctg_data) { ?>

                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name"><i class="biolife-icon icon-fruits"></i> <?php echo $ctg_data['ctg_name']; ?></a>
                                </li>

                            <?php } ?>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-md-8 padding-top-2px">
                <div class="header-search-bar layout-01">
                    <form action="#" class="form-search" name="desktop-seacrh" method="get">
                        <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                        <select name="category">
                            <option value="-1" selected>All Categories</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="fresh_berries">Fresh Berries</option>
                            <option value="ocean_foods">Ocean Foods</option>
                            <option value="butter_eggs">Butter & Eggs</option>
                            <option value="fastfood">Fastfood</option>
                            <option value="fresh_meat">Fresh Meat</option>
                            <option value="fresh_onion">Fresh Onion</option>
                            <option value="papaya_crisps">Papaya & Crisps</option>
                            <option value="oatmeal">Oatmeal</option>
                        </select>
                        <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                    </form>
                </div>
                <div class="live-info">
                    <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+900) 123 456 7891</b></p>
                    <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                </div>
            </div>
        </div>
    </div>
</div>