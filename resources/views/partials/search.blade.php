<div class="col-md-5 col-sm">
    <div data-intro="يمكنك إستخدام ميزة البحث في كامل الموقع." data-step="1">
        <form id="search" method="GET" action="https://khaledalsabt.com/search?">
            <input type="hidden" name="type" value="tafseer" id="search-type" />
            <div class="input-group input-group--header utility__bg--white">
                <div class="drop-down utility__font-small">
                    <button type="button"
                        class="btn btn--primary btn--padding-small btn--no-radius btn--with-icon drop-down__button">
                        <span>الكل</span>
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="drop-down__content">
                        <li>
                            <a href="#interpretation" data-selected="">
                                @lang('Interpretation')
                            </a>
                        </li>
                        <li>
                            <a href="#explanations" data-selected="">
                                @lang('Explanations')
                            </a>
                        </li>
                        <li>
                            <a href="#lectures" data-selected="">
                                @lang('Lectures')
                            </a>
                        </li>
                        <li>
                            <a href="#" data-selected="">
                                @lang('Featured Clips')
                            </a>
                        </li>
                        <li>
                            <a href="#library" data-selected="">
                                @lang('Library')
                            </a>
                        </li>
                        <li>
                            <a href="#fatawa" data-selected="">
                                @lang('Fatawa')
                            </a>
                        </li>
                        <li>
                            <a href="#contact" data-selected="">
                                @lang('Contact')
                            </a>
                        </li>
                    </ul>
                </div>
                <SearchBox
                    data-input-props='{"name": "q","className": "input-group__input utility__input-no-shadow search-box__input","placeholder": "كلمة البحث.."}'
                    data-value='' data-item-class='autocomplete-item'
                    data-highlight-class='autocomplete-item-highlighted' data-menu-class='autocomplete-menu'
                    data-wrapper-props='{"className": "searchBox-wrapper"}'
                    data-on-select="(function () { setTimeout(function () {document.getElementById('search').submit();})})"
                    style="flex: 1; display: flex;">
                </SearchBox>
                <button class="btn input-group__appended">
                    <i class="fa fa-search utility__font-1rem"></i>
                </button>
            </div>
        </form>
    </div>
</div>
