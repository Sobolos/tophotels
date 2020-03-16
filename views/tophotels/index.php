<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Tophotels';
?>
<div class="tour-selection-box">
    <div class="tabs-block">
        <div class="tabs-bar   tabs-bar--responsive js-768-tabs">
            <div id="step1" class="tab">Подобрать тур</div>
            <div id="form" class="tab active">Нестандартный запрос</div>
            <div class="line" style="width: 130px"></div>
        </div>
        <!--Подбор тура Ш1-->
        <div class="panel" id="step1Panel">
            <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>
            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                    <div class="tour-selection-field tour-selection-field--250">
                        <div class="js-lsfw-ppdb bth__inp-block">
                            <label for="field1" class="bth__inp-lbl ">Период дат вылетов</label>
                            <span class="bth__inp"></span>
                        </div>

                        <div id="mtIdxFormDatePPHelp1" class="formDirections formDirections--date">
                            <div class="formDirections__wrap">
                                <div class="formDirections__top formDirections__top--white ">
                                    <i class="js-lsfw-ppdb-close formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">
                                        Период дат вылета
                                    </div>
                                </div>

                                <div class="formDirections__bottom">
                                    <div class="hidden " id="mtIdxDateHelp1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--180">
                        <div class="bth__inp-block js-show-formDirections">
                            <span class="bth__inp-lbl ">Пребывание</span>
                            <span class="bth__inp  "></span>
                        </div>

                        <div class="formDirections formDirections--durability">
                            <div class="formDirections__wrap">
                                <div class="formDirections__top formDirections__top--white">

                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey js-act-country uppercase">
                                        <span class="hide-1023">Количество ночей</span>
                                        <span class="show-1023">Ночей</span>
                                    </div>

                                </div>

                                <div class="formDirections__bottom js-search-country">


                                    <div class="formDirections__bottom-blocks">
                                        <div class="formDirections__bottom-item-durability">

                                            <div class="form-durability__select ">
                                                <div class="form-durability__durability">
                                                    <div class="form-durability__select-row">
                                                        <div data-d="1"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 1</span>
                                                        </div>
                                                        <div data-d="2"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  2</span>
                                                        </div>
                                                        <div data-d="3"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 3</span>
                                                        </div>
                                                        <div data-d="4"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 4</span>
                                                        </div>
                                                        <div data-d="5"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 5</span>
                                                        </div>
                                                        <div data-d="6"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 6</span>
                                                        </div>
                                                        <div data-d="7"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  7</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-durability__select-row">
                                                        <div data-d="8"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  8</span>
                                                        </div>
                                                        <div data-d="9"
                                                             class="form-durability__select-item js-duration-cell start">
                                                            <span>  9</span>
                                                        </div>
                                                        <div data-d="10"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>   10</span>
                                                        </div>
                                                        <div data-d="11"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  11</span>
                                                        </div>
                                                        <div data-d="12"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  12</span>
                                                        </div>
                                                        <div data-d="13"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span> 13</span>
                                                        </div>
                                                        <div data-d="14"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  14</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-durability__select-row">
                                                        <div data-d="15"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  15</span>
                                                        </div>
                                                        <div data-d="16"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  16</span>
                                                        </div>
                                                        <div data-d="17"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span>  17</span>
                                                        </div>
                                                        <div data-d="18"
                                                             class="form-durability__select-item js-duration-cell ">
                                                            <span> 18</span>
                                                        </div>
                                                        <div data-d="19"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  19</span>
                                                        </div>
                                                        <div data-d="20"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  20</span>
                                                        </div>
                                                        <div data-d="21"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  21</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-durability__select-row">
                                                        <div data-d="22"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  22</span>
                                                        </div>
                                                        <div data-d="23"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 23</span>
                                                        </div>
                                                        <div data-d="24"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>   24</span>
                                                        </div>
                                                        <div data-d="25"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span> 25</span>
                                                        </div>
                                                        <div data-d="26"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>   26</span>
                                                        </div>
                                                        <div data-d="27"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>  27</span>
                                                        </div>
                                                        <div data-d="28"
                                                             class="form-durability__select-item js-duration-cell">
                                                            <span>   28</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tour-selection-field tour-selection-field--250">
                        <div class="bth__inp-block js-show-formDirections">

                            <span class="bth__inp-lbl ">Человек в номере</span>
                            <span class="bth__inp  "></span>
                        </div>

                        <div class="formDirections formDirections--guest" style="display: none;">
                            <div class="formDirections__wrap">
                                <div class="formDirections__top formDirections__top--white">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">
                                        Человек в номере
                                    </div>

                                </div>


                                <div class="formDirections__bottom-item no-border">
                                    <div>
                                        <div class="js-hide-adults formDirections__guest-wrap">
                                            <span class="formDirections__lb-uppercase bold">2 взрослых</span>
                                            <div class="formDirections__guest-btn">
                                                <i class="formDirections__guest-btn-icon selected"></i>
                                                <i class="formDirections__guest-btn-icon selected"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                            </div>
                                            <span class="js-add-more-adults formDirections__guest-plus"><i
                                                        class="fas fa-plus"></i></span>

                                        </div>
                                        <div class="js-show-adults formDirections__guest-wrap" style="display: none">
                                            <span class="formDirections__lb-uppercase bold">2 взрослых</span>
                                            <div class="formDirections__guest-btn">
                                                <i class="formDirections__guest-btn-icon selected"></i>
                                                <i class="formDirections__guest-btn-icon selected"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                                <i class="formDirections__guest-btn-icon"></i>
                                            </div>


                                        </div>
                                        <div class="formDirections__guest-wrap">
                                            <span class="formDirections__lb-uppercase bold">добавить детей</span>
                                            <div class="formDirections__guest-btn">
                                                <i class="js-added-show1   formDirections__guest-btn-icon formDirections__guest-btn-icon--sm selected "></i>
                                                <div class="js-added-show1   js-show-ages formDirections__inp-block ">
                                                    <span class="bth__inp ">18</span>
                                                </div>


                                                <i class="js-added-show2 hidden formDirections__guest-btn-icon formDirections__guest-btn-icon--sm "></i>
                                                <div class="js-added-show2 hidden js-show-ages  formDirections__inp-block ">
                                                    <span class="bth__inp normal">лет</span>
                                                </div>
                                                <i class="js-added-show3 hidden  formDirections__guest-btn-icon formDirections__guest-btn-icon--sm "></i>
                                                <div class="js-added-show3 hidden   js-show-ages  formDirections__inp-block ">
                                                    <span class="bth__inp normal">лет</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ml0 mb0 formDirections__static-btn formDirections__static-btn--sm js-close-formDirections">
                                            Применить
                                        </div>
                                    </div>
                                </div>

                                <div class="js-ages formDirections__bottom-item no-border" style="display: none">

                                    <div>
                                        <span class="formDirections__lb-uppercase bold">Возраст ребенка</span>
                                        <div class="formDirections__price-currencys formDirections__price-currencys--justify">


                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age1" name="child-age" type="radio" class="hidden">
                                                <label for="child-age1"
                                                       class="formDirections__price-currency-lb">1</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age2" name="child-age" type="radio" class="hidden">
                                                <label for="child-age2"
                                                       class="formDirections__price-currency-lb">2</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age3" name="child-age" type="radio" class="hidden">
                                                <label for="child-age3"
                                                       class="formDirections__price-currency-lb">3</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age4" name="child-age" type="radio" class="hidden">
                                                <label for="child-age4"
                                                       class="formDirections__price-currency-lb">4</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age5" name="child-age" type="radio" class="hidden">
                                                <label for="child-age5"
                                                       class="formDirections__price-currency-lb">5</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age6" name="child-age" type="radio" class="hidden">
                                                <label for="child-age6"
                                                       class="formDirections__price-currency-lb">6</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age7" name="child-age" type="radio" class="hidden">
                                                <label for="child-age7"
                                                       class="formDirections__price-currency-lb">7</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age8" name="child-age" type="radio" class="hidden">
                                                <label for="child-age8"
                                                       class="formDirections__price-currency-lb">8</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age9" name="child-age" type="radio" class="hidden">
                                                <label for="child-age9"
                                                       class="formDirections__price-currency-lb">9</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age10" name="child-age" type="radio" class="hidden">
                                                <label for="child-age10"
                                                       class="formDirections__price-currency-lb">10</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age11" name="child-age" type="radio" class="hidden">
                                                <label for="child-age11"
                                                       class="formDirections__price-currency-lb">11</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age12" name="child-age" type="radio" class="hidden">
                                                <label for="child-age12"
                                                       class="formDirections__price-currency-lb">12</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age13" name="child-age" type="radio" class="hidden">
                                                <label for="child-age13"
                                                       class="formDirections__price-currency-lb">13</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age14" name="child-age" type="radio" class="hidden">
                                                <label for="child-age14"
                                                       class="formDirections__price-currency-lb">14</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age15" name="child-age" type="radio" class="hidden">
                                                <label for="child-age15"
                                                       class="formDirections__price-currency-lb">15</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age16" name="child-age" type="radio" class="hidden">
                                                <label for="child-age16"
                                                       class="formDirections__price-currency-lb">16</label>
                                            </div>
                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age17" name="child-age" type="radio" class="hidden">
                                                <label for="child-age17"
                                                       class="formDirections__price-currency-lb">17</label>
                                            </div>

                                            <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                <input id="child-age18" name="child-age" type="radio" class="hidden">
                                                <label for="child-age18"
                                                       class="formDirections__price-currency-lb">18</label>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tour-selection-field tour-selection-field--price">
                        <div class="bth__inp-block js-show-formDirections">

                            <span class="bth__inp-lbl ">Цена не более</span>
                            <span class="bth__inp  "></span>
                        </div>
                        <div class="formDirections formDirections--price formDirections--left ">
                            <div class="formDirections__wrap">
                                <div class="formDirections__top formDirections__top--white">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Стоимость тура</div>

                                </div>


                                <div class="formDirections__price-wrap js-act-currencys" style="display: none">
                                    <div class="formDirections__price-inputs">
                                        <span class="formDirections__price-lb bold">Выберите валюту</span>
                                        <div class="formDirections__price-currencys">
                                            <div class="formDirections__price-currency">
                                                <input id="currency1-2" name="currency-2" type="radio" class="hidden"
                                                       checked="">
                                                <label for="currency1-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign"> ₽</span>
                                                    <span class="fz13">Рубль</span>
                                                </label>

                                            </div>
                                            <div class="formDirections__price-currency">
                                                <input id="currency2-2" name="currency-2" type="radio" class="hidden">
                                                <label for="currency2-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign">  €   </span>
                                                    <span class="fz13">Евро</span>
                                                </label>

                                            </div>
                                            <div class="formDirections__price-currency">
                                                <input id="currency3-2" name="currency-2" type="radio" class="hidden">
                                                <label for="currency3-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign"> $</span>
                                                    <span class="fz13">Доллар</span>
                                                </label>

                                            </div>
                                            <div class="formDirections__price-currency">
                                                <input id="currency4-2" name="currency-2" type="radio" class="hidden">
                                                <label for="currency4-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign"> ₸ </span>
                                                    <span class="fz13">Тенге</span>
                                                </label>

                                            </div>
                                            <div class="formDirections__price-currency">
                                                <input id="currency5-2" name="currency-2" type="radio" class="hidden">
                                                <label for="currency5-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign"> Б </span>
                                                    <span class="fz13"> Бел. рубль</span>
                                                </label>

                                            </div>
                                            <div class="formDirections__price-currency">
                                                <input id="currency6-2" name="currency-2" type="radio" class="hidden">
                                                <label for="currency6-2" class="formDirections__price-currency-lb">
                                                    <span class="formDirections__price-currency-sign">₴</span>

                                                    <span class="fz13">Гривна</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formDirections__price-wrap js-hide-price-inputs">
                                    <div class="formDirections__price-inputs">

                                        <div>
                                            <label for="opt-price2" class="formDirections__price-lb bold">
                                                Комфортный бюджет
                                            </label>
                                            <div class="formDirections__price">
                                                <input class="bth__inp" id="opt-price2" type="text" value="100 000 ">
                                                <div class="formDirections__price-input-bbl js-show-currencys">
                                                    ₽
                                                </div>
                                            </div>
                                            <div class="bth__inp-range-block">
                                                <input class="bth__inp-range" step="1000" type="range" value="0" min="0"
                                                       max="1000000" name="priceBudgetRangeMin">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="max-price2" class="formDirections__price-lb bold">
                                                Максимальный бюджет
                                            </label>
                                            <div class="formDirections__price">
                                                <input class="bth__inp" id="max-price2" type="text" value="1 000 000 ">
                                                <div class="formDirections__price-input-bbl js-show-currencys">
                                                    ₽
                                                </div>
                                            </div>
                                            <div class="bth__inp-range-block">
                                                <input class="bth__inp-range" step="1000" type="range" value="0" min="0"
                                                       max="1000000" name="priceBudgetRangeMax">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="formDirections__static-btn formDirections__static-btn--sm js-close-formDirections">
                                        Применить
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="tour-selection-wrap-in">
                    <div class="rbt-block mt0 mb0 ">
                        <input type="radio" name="types" class="rbt " id="type1" checked="">
                        <label class=" js-type1 label-rbt" for="type1">
                            <span class="rbt-cnt uppercase">Турпакет</span>
                        </label>
                    </div>

                    <div class="rbt-block   mt0 mb0">
                        <input type="radio" name="types" class="rbt " id="type2">
                        <label class="js-type2 label-rbt" for="type2">
                            <span class="rbt-cnt uppercase">Конкретный отель</span>
                        </label>
                    </div>
                </div>

                <div class=" js-types-search-tours-blocks">
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                        <div class="tour-selection-field tour-selection-field--250 ">
                            <div class="bth__inp-block">
                                <span class="bth__inp-lbl ">Страна поездки</span>
                                <div class="bth__inp tour-selection__country  js-show-formDirections">
                                </div>
                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">
                                        <div class="formDirections__top  formDirections__top-line">
                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                        </div>
                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                            <select id="sumo-direction">
                                                <option>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларуссия</option>
                                                <option>Казахстан</option>
                                                <option>Доминикана</option>
                                                <option>Турция</option>
                                                <option>Египет</option>
\                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections">
                                <span class="bth__inp-lbl ">Города</span>
                                <span class="bth__inp  uppercase "></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">
                                    <div class="formDirections__top  formDirections__top-line">
                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <select id="sumo-direction-city">
                                            <option>Анапа</option>
                                            <option>Билек</option>
                                            <option>Сиде</option>
                                            <option>Сочи</option>
                                            <option>Севастополь</option>
                                            <option>Симферополь</option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--200">
                            <div class="bth__inp-block js-show-formDirections ">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp uppercase"></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <select id="sumo-department">

                                            <option>Москва</option>
                                            <option>Санкт-Петербург</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Москва</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                <span class="bth__inp-lbl ">Параметры отеля</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections formDirections--big-mobile formDirections--char">
                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Параметры отеля</div>
                                </div>
                                <div class="formDirections__wrap formDirections__row">
                                    <div class="formDirections__wrap-flex">
                                        <div class="formDirections__top  formDirections__top-line">
                                            <div class="formDirections__top-tab active js-act-stars">
                                                Категория
                                            </div>
                                            <div class="formDirections__top-tab js-act-rating">
                                                Рейтинг
                                            </div>
                                            <div class="formDirections__top-tab js-act-hotels">
                                                Питание
                                            </div>
                                            <div class="formDirections__top-tab js-act-country">
                                                Расположение
                                            </div>
                                            <div class="formDirections__top-tab js-act-kid">
                                                Для детей
                                            </div>
                                            <div class="formDirections__top-tab js-act-other">
                                                Прочее
                                            </div>
                                        </div>
                                        <div class="formDirections__wrap-flex-right">
                                            <div class="formDirections__bottom js-search-country" style="display: none">
                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-positionckd"
                                                                   checked>
                                                            <label class="label-cbx" for="catalog-positionckd">
                                                                <span class="cbx-cnt">Любой тип</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Пляжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position1">
                                                            <label class="label-cbx" for="catalog-position1">
                                                                <span class="cbx-cnt">1-я линия от моря</span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16   ">
                                                            <input type="checkbox" class="cbx" id="catalog-position2">
                                                            <label class="label-cbx" for="catalog-position2">
                                                                <span class="cbx-cnt">2-я линия от моря </span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position3">
                                                            <label class="label-cbx" for="catalog-position3">
                                                                <span class="cbx-cnt"> 3-я линия от моря</span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position4">
                                                            <label class="label-cbx" for="catalog-position4">
                                                                <span class="cbx-cnt">Через дорогу </span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position5">
                                                            <label class="label-cbx" for="catalog-position5">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position6">
                                                            <label class="label-cbx" for="catalog-position6">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position7">
                                                            <label class="label-cbx" for="catalog-position7">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Загородный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position8">
                                                            <label class="label-cbx" for="catalog-position8">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position9">
                                                            <label class="label-cbx" for="catalog-position9">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position10">
                                                            <label class="label-cbx" for="catalog-position10">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Городской</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position11">
                                                            <label class="label-cbx" for="catalog-position11">
                                                                <span class="cbx-cnt">Близко к центру</span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position12">
                                                            <label class="label-cbx" for="catalog-position12">
                                                                <span class="cbx-cnt">Окраина </span>
                                                            </label>
                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position13">
                                                            <label class="label-cbx" for="catalog-position13">
                                                                <span class="cbx-cnt"> Центр</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-hotels" style="display: none">
                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-typeckd"
                                                                   checked>
                                                            <label class="label-cbx" for="333eat2-typeckd">
                                                                <span class="cbx-cnt">Любое питание</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type1">
                                                            <label class="label-cbx" for="333eat2-type1">
                                                                <span class="cbx-cnt">AI Все включено</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type2">
                                                            <label class="label-cbx" for="333eat2-type2">
                                                                <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type3">
                                                            <label class="label-cbx" for="333eat2-type3">
                                                                <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block     cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="333eat2-type4">
                                                            <label class="label-cbx" for="333eat2-type4">
                                                                <span class="cbx-cnt"> BB Завтрак</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type5">
                                                            <label class="label-cbx" for="333eat2-type5">
                                                                <span class="cbx-cnt">RO Без питания</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-stars">
                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333stars-ckd" checked>
                                                            <label class="label-cbx " for="333stars-ckd">
                                                                <span class="cbx-cnt">Любая категория</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333stars-5">
                                                            <label class="label-cbx " for="333stars-5">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="333stars-4">
                                                            <label class="label-cbx " for="333stars-4">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-3">
                                                            <label class="label-cbx " for="333stars-3">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-2">
                                                            <label class="label-cbx " for="333stars-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-1">
                                                            <label class="label-cbx " for="333stars-1">
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-hv1">
                                                            <label class="label-cbx" for="333stars-hv1">
                                                                <span class="cbx-cnt">HV1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-hv2">
                                                            <label class="label-cbx" for="333stars-hv2">
                                                                <span class="cbx-cnt">HV2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="no-stars">
                                                            <label class="label-cbx" for="no-stars">
                                                                <span class="cbx-cnt">Без категории</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333ratingckd" checked>
                                                        <label class="label-rbt" for="333ratingckd">
                                                            <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating1">
                                                        <label class="label-rbt" for="333rating1">
                                                            <span class="rbt-cnt  uppercase">Не важно</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating3">
                                                        <label class="label-rbt" for="333rating3">
                                                            <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating4">
                                                        <label class="label-rbt" for="333rating4">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating5">
                                                        <label class="label-rbt" for="333rating5">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating6">
                                                        <label class="label-rbt" for="333rating6">
                                                            <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating7">
                                                        <label class="label-rbt" for="333rating7">
                                                            <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating8">
                                                        <label class="label-rbt" for="333rating8">
                                                            <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt "
                                                               id="333rating9">
                                                        <label class="label-rbt" for="333rating9">
                                                            <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="formDirections__bottom js-search-kid" style="display: none">
                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid1">
                                                            <label class="label-cbx" for="333kid1">
                                                                <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333kid2">
                                                            <label class="label-cbx" for="333kid2">
                                                                <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid3">
                                                            <label class="label-cbx" for="333kid3">
                                                                <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid4">
                                                            <label class="label-cbx" for="333kid4">
                                                                <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-other" style="display: none">
                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333other1">
                                                            <label class="label-cbx" for="333other1">
                                                                <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333other2">
                                                            <label class="label-cbx" for="333other2">
                                                                <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formDirections__btn-orange js-close-formDirections">Применить</div>
                            </div>
                        </div>
                        <span class=" tour-selection-plus  hide-1023 js-add-field">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>

                    <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-added-field" style="display: none">
                        <div class="tour-selection-field tour-selection-field--250 ">
                            <div class="bth__inp-block">
                                <span class="bth__inp-lbl ">Страна поездки</span>
                                <div class="bth__inp tour-selection__country  js-show-formDirections"></div>
                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">
                                        <div class="formDirections__top  formDirections__top-line">
                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                        </div>
                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                            <select id="sumo-direction">
                                                <option>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларуссия</option>
                                                <option>Казахстан</option>
                                                <option>Доминикана</option>
                                                <option>Турция</option>
                                                <option>Египет</option>

                                                <option>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларуссия</option>
                                                <option>Казахстан</option>
                                                <option>Доминикана</option>
                                                <option>Турция</option>
                                                <option>Египет</option>

                                                <option>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларуссия</option>
                                                <option>Казахстан</option>
                                                <option>Доминикана</option>
                                                <option>Турция</option>
                                                <option>Египет</option>

                                                <option>Россия</option>
                                                <option>Украина</option>
                                                <option>Беларуссия</option>
                                                <option>Казахстан</option>
                                                <option>Доминикана</option>
                                                <option>Турция</option>
                                                <option>Египет</option>


                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Города</span>
                                <span class="bth__inp  uppercase "></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                        <select id="sumo-direction-city">


                                            <option>Анапа</option>
                                            <option>Билек</option>
                                            <option>Сиде</option>
                                            <option>Сочи</option>
                                            <option>Севастополь</option>
                                            <option>Симферополь</option>
                                            <option>Анапа</option>
                                            <option>Билек</option>
                                            <option>Сиде</option>
                                            <option>Сочи</option>
                                            <option>Севастополь</option>
                                            <option>Симферополь</option>
                                            <option>Анапа</option>
                                            <option>Билек</option>
                                            <option>Сиде</option>
                                            <option>Сочи</option>
                                            <option>Севастополь</option>
                                            <option>Симферополь</option>
                                            <option>Анапа</option>
                                            <option>Билек</option>
                                            <option>Сиде</option>
                                            <option>Сочи</option>
                                            <option>Севастополь</option>
                                            <option>Симферополь</option>


                                        </select>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--200">
                            <div class="bth__inp-block js-show-formDirections ">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp uppercase"></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <select id="sumo-department">

                                            <option>Москва</option>
                                            <option>Санкт-Петербург</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Москва</option>
                                            <option>Санкт-Петербург</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>

                                        </select>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                <span class="bth__inp-lbl ">Параметры отеля</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections   formDirections--big-mobile formDirections--char">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Параметры отеля</div>
                                </div>


                                <div class="formDirections__wrap formDirections__row">

                                    <div class="formDirections__wrap-flex">
                                        <div class="formDirections__top  formDirections__top-line">


                                            <div class="formDirections__top-tab active js-act-stars">
                                                Категория
                                            </div>

                                            <div class="formDirections__top-tab js-act-rating">

                                                Рейтинг
                                            </div>
                                            <div class="formDirections__top-tab js-act-hotels">

                                                Питание
                                            </div>
                                            <div class="formDirections__top-tab js-act-country">

                                                Расположение
                                            </div>
                                            <div class="formDirections__top-tab js-act-kid">

                                                Для детей
                                            </div>
                                            <div class="formDirections__top-tab js-act-other">

                                                Прочее
                                            </div>

                                        </div>
                                        <div class="formDirections__wrap-flex-right">
                                            <div class="formDirections__bottom js-search-country" style="display: none">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-positionckd" checked>
                                                            <label class="label-cbx" for="added-catalog-positionckd">
                                                                <span class="cbx-cnt">Любой тип</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Пляжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position1">
                                                            <label class="label-cbx" for="added-catalog-position1">
                                                                <span class="cbx-cnt">1-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16   ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position2">
                                                            <label class="label-cbx" for="added-catalog-position2">
                                                                <span class="cbx-cnt">2-я линия от моря </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position3">
                                                            <label class="label-cbx" for="added-catalog-position3">
                                                                <span class="cbx-cnt"> 3-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position4">
                                                            <label class="label-cbx" for="added-catalog-position4">
                                                                <span class="cbx-cnt">Через дорогу </span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position5">
                                                            <label class="label-cbx" for="added-catalog-position5">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position6">
                                                            <label class="label-cbx" for="added-catalog-position6">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position7">
                                                            <label class="label-cbx" for="added-catalog-position7">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Загородный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position8">
                                                            <label class="label-cbx" for="added-catalog-position8">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position9">
                                                            <label class="label-cbx" for="added-catalog-position9">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position10">
                                                            <label class="label-cbx" for="added-catalog-position10">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Городской</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position11">
                                                            <label class="label-cbx" for="added-catalog-position11">
                                                                <span class="cbx-cnt">Близко к центру</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position12">
                                                            <label class="label-cbx" for="added-catalog-position12">
                                                                <span class="cbx-cnt">Окраина </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx"
                                                                   id="added-catalog-position13">
                                                            <label class="label-cbx" for="added-catalog-position13">
                                                                <span class="cbx-cnt"> Центр</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-hotels" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-typeckd"
                                                                   checked>
                                                            <label class="label-cbx" for="added-food-typeckd">
                                                                <span class="cbx-cnt">Любое питание</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type1">
                                                            <label class="label-cbx" for="added-food-type1">
                                                                <span class="cbx-cnt">AI Все включено</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-food-type2">
                                                            <label class="label-cbx" for="added-food-type2">
                                                                <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type3">
                                                            <label class="label-cbx" for="added-food-type3">
                                                                <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block     cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-food-type4">
                                                            <label class="label-cbx" for="added-food-type4">
                                                                <span class="cbx-cnt"> BB Завтрак</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type5">
                                                            <label class="label-cbx" for="added-food-type5">
                                                                <span class="cbx-cnt">RO Без питания</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-stars">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-ckd"
                                                                   checked>
                                                            <label class="label-cbx " for="added-stars-ckd">
                                                                <span class="cbx-cnt">Любая категория</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-5">
                                                            <label class="label-cbx " for="added-stars-5">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-stars-4">
                                                            <label class="label-cbx " for="added-stars-4">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-3">
                                                            <label class="label-cbx " for="added-stars-3">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-2">
                                                            <label class="label-cbx " for="added-stars-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-1">
                                                            <label class="label-cbx " for="added-stars-1">
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv1">
                                                            <label class="label-cbx" for="added-stars-hv1">
                                                                <span class="cbx-cnt">HV1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv2">
                                                            <label class="label-cbx" for="added-stars-hv2">
                                                                <span class="cbx-cnt">HV2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="no-stars">
                                                            <label class="label-cbx" for="no-stars">
                                                                <span class="cbx-cnt">Без категории</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom-blocks js-search-rating"
                                                 style="display: none">


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333ratingckd" checked>
                                                        <label class="label-rbt" for="added-333ratingckd">
                                                            <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating1">
                                                        <label class="label-rbt" for="added-333rating1">
                                                            <span class="rbt-cnt  uppercase">Не важно</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating3">
                                                        <label class="label-rbt" for="added-333rating3">
                                                            <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating4">
                                                        <label class="label-rbt" for="added-333rating4">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating5">
                                                        <label class="label-rbt" for="added-333rating5">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating6">
                                                        <label class="label-rbt" for="added-333rating6">
                                                            <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating7">
                                                        <label class="label-rbt" for="added-333rating7">
                                                            <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating8">
                                                        <label class="label-rbt" for="added-333rating8">
                                                            <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt "
                                                               id="added-333rating9">
                                                        <label class="label-rbt" for="added-333rating9">
                                                            <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-kid" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl1">
                                                            <label class="label-cbx" for="added-chl1">
                                                                <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-chl2">
                                                            <label class="label-cbx" for="added-chl2">
                                                                <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl3">
                                                            <label class="label-cbx" for="added-chl3">
                                                                <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl4">
                                                            <label class="label-cbx" for="added-chl4">
                                                                <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-other" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-other1">
                                                            <label class="label-cbx" for="added-other1">
                                                                <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-other2">
                                                            <label class="label-cbx" for="added-other2">
                                                                <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formDirections__btn-orange js-close-formDirections">Применить</div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus js-del-field"><i class="fas fa-minus"></i></span>
                    </div>
                </div>


                <div class=" js-types-search-hotel-blocks" style="display: none">
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                        <div class="tour-selection-field tour-selection-field--250">
                            <div class="bth__inp-block js-show-formDirections">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp">
                                </span>
                            </div>

                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <select id="sumo-department">

                                            <option>Москва</option>
                                            <option>Санкт-Петербург</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Москва</option>
                                            <option>Санкт-Петербург</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>
                                            <option>Абакан</option>
                                            <option>Агзу</option>

                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tour-selection-field tour-selection-field--250">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Питание</span>
                                <span class="bth__inp">
                                </span>
                            </div>
                            <div class="formDirections">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">
                                        Питание
                                    </div>
                                </div>


                                <div class="formDirections__wrap">

                                    <div class="formDirections__bottom ">

                                        <div class="formDirections__bottom-blocks">

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type1">
                                                    <label class="label-cbx" for="8eat2-type1">
                                                        <span class="cbx-cnt">AI Все включено</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="8eat2-type2">
                                                    <label class="label-cbx" for="8eat2-type2">
                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type3">
                                                    <label class="label-cbx" for="8eat2-type3">
                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type4">
                                                    <label class="label-cbx" for="8eat2-type4">
                                                        <span class="cbx-cnt"> BB Завтрак</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type5">
                                                    <label class="label-cbx" for="8eat2-type5">
                                                        <span class="cbx-cnt">RO Без питания</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="formDirections__static-btn js-close-formDirections">Применить
                                            </div>


                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                        <div class="tour-selection-field tour-selection-field--740">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">

                                <span class="bth__inp-lbl ">Добавить отель</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections formDirections--big-mobile w100p">
                                <div class="formDirections__wrap w100p">
                                    <div class="formDirections__top formDirections__top--white">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">
                                            Добавить отель
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom">

                                        <div class="formDirections__search">
                                            <input class="bth__inp" type="text" placeholder="Поиск отеля">
                                        </div>
                                        <div class="formDirections__wrap  formDirections__bottom-blocks-cut">

                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <span class="tour-selection-plus hide-1023 js-add-hotel"><i class="fas fa-plus"></i></span>
                    </div>

                    <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-add-hotel "
                         style="display: none">
                        <div class="tour-selection-field tour-selection-field--740">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">

                                <span class="bth__inp-lbl ">Добавить отель</span>
                                <span class="bth__inp"></span>
                            </div>
                            <div class="formDirections formDirections--big-mobile w100p">
                                <div class="formDirections__wrap w100p">
                                    <div class="formDirections__top formDirections__top--white">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">
                                            Добавить отель
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom">

                                        <div class="formDirections__search">
                                            <input class="bth__inp" type="text" placeholder="Поиск отеля">
                                        </div>
                                        <div class="formDirections__wrap  formDirections__bottom-blocks-cut">

                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus  js-del-hotel"><i class="fas fa-minus"></i></span>
                    </div>


                </div>


                <div class="tour-selection-wrap-in">
                    <div class="bth__ta-resizable-wrap">
                        <div class="bth__ta-resizable" contenteditable=""></div>

                        <span class="bth__ta-resizable-hint">Дополнительные пожелания</span>

                    </div>
                </div>
                <div class="tour-selection-wrap-in">
                    <div class=" bth__btn  bth__btn--fill bth__loader">
                        Сформировать заявку
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!--Кастомный тур-->
        <div class="panel" id="formPanel" style="display: none">
            <?php $form = ActiveForm::begin([
                'method' => 'post',
                //'action' => ['tophotels/help-selection#form'],
                'id' => 'CustomTourForm'
            ]) ?>
            <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>
            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in">
                    <div class="bth__inp-block long">
                        <?= Html::activeTextarea($customTourForm, 'tripParams', ['class'=>'bth__inp bold js-stop-label', 'id'=>'parametrs'])?>
                        <label for="parametrs" class="bth__inp-lbl">
                            <span class="block  mb5">- укажите страну, курорт или отель</span>
                            <span class="block  mb5">- количество человек</span>
                            <span class="block  mb5">- ваши предпочтения по отелю</span>
                            <span class="block mb5">- ваш бюджет</span>
                            <span class="block">- другие пожелания</span>
                        </label>
                    </div>
                </div>
                <div class="tour-selection-wrap-in tour-selection-wrap-flex">

                    <div class="tour-selection-field tour-selection-field--30p">
                        <div class="js-add-error bth__inp-block" id="nameLbl">
                            <?= Html::activeTextInput($customTourForm, 'name', ['class'=>'bth__inp js-label', 'id'=>'nameInput'])?>
                            <?= Html::tag('label', 'Ваше имя', ['class'=>'bth__inp-lbl', 'for'=>'nameInput'])?>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--30p">
                        <div class="js-add-error bth__inp-block " id="phoneLbl">
                            <?= Html::activeTextInput($customTourForm, 'phone', ['class'=>'bth__inp js-label', 'id'=>'phoneInput'])?>
                            <?= Html::tag('label', 'Телефон', ['class'=>'bth__inp-lbl', 'for'=>'phone'])?>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-selection-field tour-selection-field--30p">
                        <div class="bth__inp-block js-add-error" id="emailLbl">
                            <?= Html::activeTextInput($customTourForm, 'email', ['class'=>'bth__inp js-label', 'id'=>'emailInput'])?>
                            <?= Html::tag('label', 'Email (Необязательно)', ['class'=>'bth__inp-lbl', 'for'=>'email'])?>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Введите email в формате ххххх@xxxx.xxx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-wrap-in">
                    <button class=" bth__btn  bth__btn--fill bth__loader">
                        Отправить заявку*
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </button>
                    <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                        *Нажимая на кнопку "отправить", я принимаю
                        <a href="#p-agreement-pp" class="p-agreement-pp agree">
                            Соглашение об обработке личных данных</a> и
                        <a href="#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
        <!--Спасибо-->
        <div class="panel" id="formStep2" style="display: none">
            <div class="bth__cnt fz18 bold">Спасибо, Ваша заявка отправлена и будет обработана в ближайшее время.</div>
        </div>
        <!--Подбор тура Ш2-->
        <div class="panel" id="step2Panel" style="display: none">
            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in mt0 tour-selection-wrap-flex">
                    <div class="tour-selection-field tour-selection-field--270">
                        <div class="js-add-error bth__inp-block  ">
                            <input type="text" value="Саша" class="bth__inp js-label" id="name3">
                            <label for="name3" class="bth__inp-lbl">Ваше имя</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--270">
                        <div class="js-add-error bth__inp-block ">
                            <input value="+79532453351" type="text" class="bth__inp js-label" id="phone3" placeholder="">
                            <label for="phone3" class="bth__inp-lbl">Телефон</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--270">
                        <div class="bth__inp-block  ">
                            <input type="text" value="smerekovska1976@gmail.com" class="bth__inp js-label " id="mail2">
                            <label for="mail2" class="bth__inp-lbl">Email (не обязательно)</label>
                        </div>
                    </div>
                </div>
                <div class="bth__cnt uppercase mt20 ">Уточните удобные координаты для выбора турагенства</div>
                <div class="tour-selection-wrap-in   tour-selection-wrap-flex ">
                    <div class="tour-selection-field tour-selection-field--270 ">
                        <div class="bth__inp-block js-show-formDirections js-add-error">
                            <span class="bth__inp-lbl active">Ваш город</span>
                            <span class="bth__inp">
                                <b class="uppercase">Санкт-Петербург</b>
                            </span>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                        <div class="formDirections w100p">
                            <div class="formDirections__wrap w100p">
                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">Города</div>
                                </div>
                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                    <select id="sumo-list-city">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tour-selection-wrap-in ">
                    <a href="#metro-valid-pp" class="metro-valid-pp bth__btn  bth__btn--fill bth__loader">
                        Отправить запрос*
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                    <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                        *Нажимая на кнопку "отправить", я принимаю
                        <a href="#p-agreement-pp" class="p-agreement-pp agree">
                            Соглашение об обработке личных данных</a> и
                        <a href="#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>