<section class="section hero" aria-label="hero">
    <div class="container">
        @yield('content')

        <div class="hero-form-wrapper">
            <div class="form-tab">
                <button class="tab-btn active" data-tab-btn>Buy</button>
            </div>

            <form action="" class="hero-form">
                <div class="input-wrapper">
                    <label for="search" class="input-label">Search: </label>
                    <input type="search" name="search" id="search" placeholder="Search your home" required class="input-field">
                    <ion-icon name="search-outline"></ion-icon>
                </div>

                <div class="input-wrapper">
                    <label for="category" class="input-label">Select Categories</label>
                    <select name="category" id="category" class="dropdown-list">
                        <option value="house">House</option>
                        <option value="apartment">Apartment</option>
                        <option value="offices">Offices</option>
                        <option value="townhome">Townhome</option>
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="min-price" class="input-label">Min Price :</label>
                    <select name="min-price" id="min-price" class="dropdown-list">
                        <option value="100">100,000</option>
                        <option value="200">200,000</option>
                        <option value="300">300,000</option>
                        <option value="400">400,000</option>
                        <option value="500">500,000</option>
                        <option value="1000">1000,000</option>
                        <option value="2000">2000,000</option>
                        <option value="3000">3000,000</option>
                        <option value="4000">4000,000</option>
                        <option value="5000">5000,000</option>
                        <option value="6000">6000,000</option>
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="max-price" class="input-label">Max Price :</label>
                    <select name="max-price" id="max-price" class="dropdown-list">
                        <option value="100">100,000</option>
                        <option value="200">200,000</option>
                        <option value="300">300,000</option>
                        <option value="400">400,000</option>
                        <option value="500">500,000</option>
                        <option value="1000">1000,000</option>
                        <option value="2000">2000,000</option>
                        <option value="3000">3000,000</option>
                        <option value="4000">4000,000</option>
                        <option value="5000">5000,000</option>
                        <option value="6000">6000,000</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Search now</button>
            </form>
        </div>
    </div>
</section>