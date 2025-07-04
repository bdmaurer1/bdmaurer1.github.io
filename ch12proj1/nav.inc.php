 <aside class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                <?php 
            global $continents;
            foreach ($continents as $code => $name) {
            echo "<li class='list-group-item'><a href='#'>$name</a></li>";
                }
                ?>
                </ul>

                </div>
                <!-- end continents panel -->

                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="photos.php?iso=CA">Canada</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=FR">France</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=IT">Italy</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=DE">Germany</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=GH">Ghana</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=GR">Greece</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=ES">Spain</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=US">United States</a></li>
                        <li class="list-group-item"><a href="photos.php?iso=GB">United Kingdom</a></li>
                    </ul>
                </div>
                <!-- end continents panel -->
            </aside>