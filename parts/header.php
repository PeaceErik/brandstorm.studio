

<?= '<header>' ?>

    <?= '<div class="header-left">
            <a href="/"><img class="header-logo" src="./assets/brandstorm-logo-white.svg" alt="Brandstorm Studios logo"></a>
        </div>' ?>

    <?= '<div class="header-mid">
            <a href="/"><img class="header-logo" src="./assets/transp_favicon.svg"></a>
         </div>' ?>

    <?= '<div class="header-right">
            <button class="menu-btn" popovertarget="menu-pop" popovertargetaction="show"></button>
            <button popovertarget="menu-pop" popovertargetaction="hide">hide<button>
            <div id="menu-pop" popover>This is a test</div>
         </div>' ?>

<?= '</header>' ?>