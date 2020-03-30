<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tophotels';
?>
<div class="tour-selection-box">
    <div class="tabs-block">
        <div class="tabs-bar   tabs-bar--responsive js-768-tabs">
            <a id="step1" class="tab">Подобрать тур</a>
            <a id="form" class="tab active">Нестандартный запрос</a>
            <div class="line" style="width: 130px"></div>
        </div>

        <div>
            <!--Подбор тура Ш1-->
            <div class="panel" id="step1Panel">
                <?php $tourform = ActiveForm::begin([
                    'method' => 'post',
                    //'action' => ['tophotels/help-selection#form'],
                    'id' => 'TourForm'
                ]) ?>
                <?= Html::activeHiddenInput ($tourForm, 'tType', ['id'=>'InputTourType', 'value'=>'1'])?>
                <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>
                <div class="tour-selection-wrap">
                    <!--Верхний блок-->
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                        <div class="tour-selection-field tour-selection-field--250">
                            <div id="dateInput" class="js-lsfw-ppdb bth__inp-block">
                                <label for="field1" class="bth__inp-lbl" id="dates-lbl">Период дат вылетов</label>
                                <span class="bth__inp" id="dates-spn">
                                    <span class="fz13 normal" id="dates-diff-spn"></span>
                                </span>
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

                            <?= Html::activeHiddenInput ($tourForm, 'departDates', ['id'=>'departDates'])?>
                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div id="durationInput" class="bth__inp-block js-show-formDirections">
                                <label class="bth__inp-lbl" id="nights-lbl">Пребывание</label>
                                <span class="bth__inp" id="nights-spn"></span>
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
                                                                 class="form-durability__select-item js-duration-cell">
                                                                <span>  9</span>
                                                            </div>
                                                            <div data-d="10"
                                                                 class="form-durability__select-item js-duration-cell">
                                                                <span>   10</span>
                                                            </div>
                                                            <div data-d="11"
                                                                 class="form-durability__select-item js-duration-cell">
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
                                                                 class="form-durability__select-item js-duration-cell">
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
                                        <?= Html::activeHiddenInput ($tourForm, 'nightsAmount', ['id'=>'nightsAmount'])?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tour-selection-field tour-selection-field--250">
                            <div id="guestsInput" class="bth__inp-block js-show-formDirections">
                                <label class="bth__inp-lbl" id="guests-lbl">Человек в номере</label>
                                <span class="bth__inp" id="guests-spn"></span>
                            </div>
                            <div class="formDirections formDirections--guest" style="display: none;">
                                <div class="formDirections__wrap">
                                    <div class="formDirections__top formDirections__top--white">
                                        <i class="guestsSubmit formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">
                                            Человек в номере
                                        </div>
                                    </div>

                                    <div class="guests formDirections__bottom-item no-border">
                                        <div>
                                            <div class="js-hide-adults formDirections__guest-wrap">
                                                <span id="adultsAmount-spn" class="formDirections__lb-uppercase bold">2 взрослых</span>
                                                <div class="formDirections__guest-btn">
                                                    <i class="formDirections__guest-btn-icon selected adult"></i>
                                                    <i class="formDirections__guest-btn-icon selected adult"></i>
                                                    <i class="formDirections__guest-btn-icon adult"></i>
                                                    <i class="formDirections__guest-btn-icon adult"></i>
                                                    <span id="showMorePeople" class="js-add-more-adults formDirections__guest-plus">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                    <i class="formDirections__guest-btn-icon hidden adult"></i>
                                                </div>
                                            </div>
                                            <div class="formDirections__guest-wrap">
                                                <span class="formDirections__lb-uppercase bold">добавить детей</span>
                                                <div class="ages formDirections__guest-btn">
                                                    <i class="guestChild js-added-show1 formDirections__guest-btn-icon formDirections__guest-btn-icon--sm"></i>
                                                    <div data-child="1" class="js-added-show1 showAges formDirections__inp-block ">
                                                        <span id="chid1Age-spn" class="bth__inp ">лет</span>
                                                    </div>

                                                    <i class="guestChild js-added-show2 hidden formDirections__guest-btn-icon formDirections__guest-btn-icon--sm "></i>
                                                    <div data-child="2" class="js-added-show2 showAges hidden formDirections__inp-block ">
                                                        <span id="chid2Age-spn" class="bth__inp normal">лет</span>
                                                    </div>

                                                    <i class="guestChild js-added-show3 hidden formDirections__guest-btn-icon formDirections__guest-btn-icon--sm "></i>
                                                    <div data-child="3" class="js-added-show3 showAges hidden formDirections__inp-block ">
                                                        <span id="chid3Age-spn" class="bth__inp normal">лет</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="guestsSubmit ml0 mb0 formDirections__static-btn formDirections__static-btn--sm js-close-formDirections">
                                                Применить
                                            </div>
                                        </div>
                                    </div>

                                    <div class="childAges formDirections__bottom-item no-border" style="display: none">
                                        <div>
                                            <span class="formDirections__lb-uppercase bold">Возраст ребенка</span>
                                            <div class="formDirections__price-currencys formDirections__price-currencys--justify">
                                                <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age0" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age0" data-action="setAge" class="formDirections__price-currency-lb">0</label>
                                                </div>
                                                <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age1" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age1" data-action="setAge"  data-action="setAge" class="formDirections__price-currency-lb">1</label>
                                                </div>
                                                <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age2" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age2"  data-action="setAge" class="formDirections__price-currency-lb">2</label>
                                                </div>
                                                <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age3" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age3"  data-action="setAge" class="formDirections__price-currency-lb">3</label>
                                                </div>
                                                <div class="formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age4" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age4"  data-action="setAge" class="formDirections__price-currency-lb">4</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age5" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age5"  data-action="setAge" class="formDirections__price-currency-lb">5</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age6" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age6"  data-action="setAge" class="formDirections__price-currency-lb">6</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age7" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age7"  data-action="setAge" class="formDirections__price-currency-lb">7</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age8" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age8"  data-action="setAge" class="formDirections__price-currency-lb">8</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age9" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age9"  data-action="setAge" class="formDirections__price-currency-lb">9</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age10" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age10"  data-action="setAge" class="formDirections__price-currency-lb">10</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age11" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age11"  data-action="setAge" class="formDirections__price-currency-lb">11</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age12" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age12"  data-action="setAge" class="formDirections__price-currency-lb">12</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age13" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age13"  data-action="setAge" class="formDirections__price-currency-lb">13</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age14" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age14"  data-action="setAge" class="formDirections__price-currency-lb">14</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age15" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age15"  data-action="setAge" class="formDirections__price-currency-lb">15</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age16" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age16"  data-action="setAge" class="formDirections__price-currency-lb">16</label>
                                                </div>
                                                <div class=" formDirections__price-currency formDirections__price-currency--sm">
                                                    <input id="child-age17" name="child-age" type="radio" class="hidden">
                                                    <label for="child-age17"  data-action="setAge" class="formDirections__price-currency-lb">17</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?= Html::activeHiddenInput ($tourForm, 'adultsAmount', ['id'=>'adultsAmount-inpt'])?>
                            <?= Html::activeHiddenInput ($tourForm, 'childrenAmount', ['id'=>'childrenAmount-inpt'])?>
                            <?= Html::activeHiddenInput ($tourForm, 'child1Age', ['id'=>'child1Age-inpt'])?>
                            <?= Html::activeHiddenInput ($tourForm, 'child2Age', ['id'=>'child2Age-inpt'])?>
                            <?= Html::activeHiddenInput ($tourForm, 'child3Age', ['id'=>'child3Age-inpt'])?>
                        </div>
                        <div class="tour-selection-field tour-selection-field--price">
                            <div class="bth__inp-block js-show-formDirections">
                                <span class="bth__inp-lbl active bold">Цена не более</span>
                                <span class="tourPrice-spn bth__inp  ">не важно</span>
                            </div>
                            <div class="formDirections formDirections--price formDirections--left ">
                                <div class="formDirections__wrap">
                                    <div class="formDirections__top formDirections__top--white">
                                        <i class="setPrice formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">Стоимость тура</div>
                                    </div>
                                    <div class="formDirections__price-wrap js-act-currencys" style="display: none">
                                        <div class="formDirections__price-inputs">
                                            <span class="formDirections__price-lb bold">Выберите валюту</span>
                                            <div class="formDirections__price-currencys">
                                                <div class="formDirections__price-currency">
                                                    <input id="currency1-2" name="currency-2" type="radio" class="hidden" checked="">
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
                                                <label for="opt-price2" class="formDirections__price-lb active">Комфортный бюджет</label>
                                                <div class="formDirections__price">
                                                    <?= Html::activeTextInput($tourForm, 'optPrice', ['class'=>'opt-price opt-price-text bth__inp', 'value'=>'не важно'])?>
                                                    <div class="formDirections__price-input-bbl js-show-currencys">₽</div>
                                                </div>
                                                <div class="bth__inp-range-block">
                                                    <input class="opt-price bth__inp-range" step="1000" type="range" value="0" min="0" max="1000000" name="priceBudgetRangeMin">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="max-price2" class="formDirections__price-lb active">Максимальный бюджет</label>
                                                <div class="formDirections__price">
                                                    <?= Html::activeTextInput($tourForm, 'maxPrice', ['class'=>'max-price max-price-text bth__inp', 'id'=>'max-price2', 'value'=>'не важно'])?>
                                                    <div class="formDirections__price-input-bbl js-show-currencys">₽</div>
                                                </div>
                                                <div class="bth__inp-range-block">
                                                    <input class="max-price bth__inp-range" step="1000" type="range" value="0" min="0" max="1000000" name="priceBudgetRangeMax">
                                                </div>
                                            </div>
                                        </div>
                                        <?= Html::activeHiddenInput($tourForm, 'currency', ['id'=>'priceCurrency', 'value'=>'₽'])?>
                                        <div class="setPrice formDirections__static-btn formDirections__static-btn--sm js-close-formDirections">
                                            Применить
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Переключатель-->
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
                    <!--Выбор тура-->
                    <div class=" js-types-search-tours-blocks">
                        <!--Поля 1-->
                        <div id="selectTour1">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                                <div class="tour-selection-field tour-selection-field--250 ">
                                    <div class="bth__inp-block">
                                        <span id="directionCountry-spn" class="directionCountry-spn bth__inp-lbl bth__inp-lbl--center active">Страна поездки</span>
                                        <div id="directionCountry-lbl" class="directionCountry-lbl bth__inp tour-selection__country  js-show-formDirections uppercase">
                                            <div class="tour-selection__flag lsfw-flag"></div>
                                            Не важно
                                        </div>
                                        <div class="formDirections w100p" style="display: none;">
                                            <div class="formDirections__wrap w100p">
                                                <div class="formDirections__top  formDirections__top-line">
                                                    <i class="formDirections__bottom-close"></i>
                                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                                </div>
                                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                    <select id="directionCountry" name="Tour[directionCountry1]" class="sumo-direction">
                                                        <option selected data-id=""></option>
                                                        <?php foreach ($parameters['countries'] as $country): ?>
                                                            <option data-id="<?=$country['id']?>"><?=$country['name']?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections">
                                        <span id="cityDirection1-spn" class="cityDirection-spn bth__inp-lbl active">Город</span>
                                        <label id="cityDirection1-lbl" class="cityDirection-lbl bth__inp  uppercase ">Не важно</label>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div id="formDirectionsTabCountry"  class="formDirectionsTabCountry formDirections__top-tab super-grey ">Укажите страну</div>
                                            </div>
                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionCity" name="Tour[directionCity1]" class="sumo-direction-city">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--200">
                                    <div class="bth__inp-block js-show-formDirections ">
                                        <span id="cityFly-spn" class="cityFly-spn bth__inp-lbl active">Город вылета</span>
                                        <span id="cityFly-lbl" class="cityFly-lbl bth__inp uppercase">не важно</span>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                            </div>

                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionFlyCity" name="Tour[directionFlyCity1]" class="sumo-department">
                                                    <?php foreach ($parameters['flyCities'] as $flyCity): ?>
                                                        <option data-id="<?=$flyCity['id']?>"><?=$flyCity['name']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl hotel-param-lbl">Параметры отеля</span>
                                        <span class="bth__inp hotel-param-spn"></span>
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
                                                                    <input data-resort="0" data-attr="0;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel" id="catalog-positionckd-1" checked>
                                                                    <label class="label-cbx" for="catalog-positionckd-1">
                                                                        <span class="cbx-cnt">Любой тип</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php $main = 0;
                                                            foreach ($parameters['hotelAlloc'] as $key => $parameter): $main++?>
                                                                <div class="formDirections__cbx-ttl"><?=$key?></div>
                                                                <div class=" formDirections__left-30 ">
                                                                    <?php
                                                                    $iter = 0;
                                                                    foreach ($parameter['data'] as $data) : $iter++?>
                                                                        <div class="cbx-block   cbx-block--16 ">
                                                                            <input data-resort="<?=$main?>" data-attr="<?=$main."-".$iter?>;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel-<?= $parameter['eng']?>" id="hotel-allocate-1-<?= $parameter['eng']?><?=$iter?>">
                                                                            <label class="label-cbx" for="hotel-allocate-1-<?= $parameter['eng']?><?=$iter?>">
                                                                                <span class="cbx-cnt"><?=$data?></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelAllocation1', ['class'=>'hotelAllocation', 'value'=>'0'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-hotels" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="Любое питание;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="331eat2-typeckd" checked>
                                                                    <label class="label-cbx" for="331eat2-typeckd">
                                                                        <span class="cbx-cnt">Любое питание</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="AI;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="331eat2-type1">
                                                                    <label class="label-cbx" for="331eat2-type1">
                                                                        <span class="cbx-cnt">AI Все включено</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="FB;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="331eat2-type2">
                                                                    <label class="label-cbx" for="331eat2-type2">
                                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="HB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="331eat2-type3">
                                                                    <label class="label-cbx" for="331eat2-type3">
                                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block     cbx-block--16">
                                                                    <input data-attr="BB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="331eat2-type4">
                                                                    <label class="label-cbx" for="331eat2-type4">
                                                                        <span class="cbx-cnt">BB Завтрак</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="RO;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="331eat2-type5">
                                                                    <label class="label-cbx" for="331eat2-type5">
                                                                        <span class="cbx-cnt">RO Без питания</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelEating1', ['class'=>'hotelEating'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-stars">
                                                        <div class="formDirections__bottom-blocks">
                                                            <?php $iter = 0;
                                                            foreach ($parameters['hotelTypes'] as $type): $iter++?>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block  cbx-block--16  ">
                                                                <?php
                                                                $stars = (int)$type['name'][0];
                                                                $length = strlen($type['name']);?>
                                                                    <input data-attr="<?=$type['name']?>;" type="checkbox" class="cbx hotel-param hotel-param-type"  id="331stars-<?=$iter?>">
                                                                    <label class="label-cbx " for="331stars-<?=$iter?>">
                                                                    <?php
                                                                    if($stars) :?>
                                                                        <?php for ($i = 0; $i < $stars; $i++):?>
                                                                            <i class="fa fa-star"></i>
                                                                        <?php endfor;?>
                                                                    <?php else: ?>
                                                                        <?=$type['name']?>
                                                                    <?php endif;?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelStars1', ['class'=>'hotelType'])?>
                                                    </div>
                                                    <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                                        <div class="form-dropdown-stars__item ">
                                                            <div class="rbt-block  ">
                                                                <input data-attr="Не важно" checked type="radio" name="331rating" class="rbt hotel-param hotel-param-rating" id="331rating1">
                                                                <label class="label-rbt" for="331rating1">
                                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php for($i = 5.0; $i >= 3.25; $i = $i-0.25): ?>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="rbt-block  ">
                                                                    <input data-attr="<?=$i?>;" type="radio" name="331rating" class="rbt hotel-param hotel-param-rating" id="331rating<?=$i?>">
                                                                    <label class="label-rbt" for="331rating<?=$i?>">
                                                                        <span class="rbt-cnt  uppercase"> Не ниже <?= $i?></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php endfor;?>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelRating1', ['class'=>'hotelRating'])?>
                                                    </div>

                                                    <div class="formDirections__bottom js-search-kid" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="детский горшок;" type="checkbox" class="cbx hotel-param hotel-param-children" id="331kid1">
                                                                    <label class="label-cbx" for="331kid1">
                                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="детские блюда;" type="checkbox" class="cbx hotel-param hotel-param-children" id="331kid2">
                                                                    <label class="label-cbx" for="331kid2">
                                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="пеленальный столик;" type="checkbox" class="cbx hotel-param hotel-param-children" id="331kid3">
                                                                    <label class="label-cbx" for="331kid3">
                                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="анимация;" type="checkbox" class="cbx hotel-param hotel-param-children" id="331kid4">
                                                                    <label class="label-cbx" for="331kid4">
                                                                        <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelChildren1', ['class'=>'hotelChildren'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-other" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="веселая анимация;" type="checkbox" class="cbx hotel-param hotel-param-other" id="331other1">
                                                                    <label class="label-cbx" for="331other1">
                                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="тусовки рядом с отелем;" type="checkbox" class="cbx hotel-param hotel-param-other" id="331other2">
                                                                    <label class="label-cbx" for="331other2">
                                                                        <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelOther1', ['class'=>'hotelOther'])?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-params-apply formDirections__btn-orange js-close-formDirections">Применить</div>
                                    </div>
                                </div>
                                <span class=" tour-selection-plus  hide-1023 js-add-field">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                        </div>
                        <!--Поля 2-->
                        <div id="selectTour2" style="display: none">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                                <div class="tour-selection-field tour-selection-field--250 ">
                                    <div class="bth__inp-block">
                                        <span id="directionCountry-spn" class="directionCountry-spn bth__inp-lbl bth__inp-lbl--center active">Страна поездки</span>
                                        <div id="directionCountry-lbl" class="directionCountry-lbl bth__inp tour-selection__country  js-show-formDirections uppercase">
                                            <div class="tour-selection__flag lsfw-flag"></div>
                                            Не важно
                                        </div>
                                        <div class="formDirections w100p" style="display: none;">
                                            <div class="formDirections__wrap w100p">
                                                <div class="formDirections__top  formDirections__top-line">
                                                    <i class="formDirections__bottom-close"></i>
                                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                                </div>
                                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                    <select id="directionCountry" name="Tour[directionCountry2]" class="sumo-direction">
                                                        <option selected data-id=""></option>
                                                        <?php foreach ($parameters['countries'] as $country): ?>
                                                            <option data-id="<?=$country['id']?>"><?=$country['name']?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections">
                                        <span id="cityDirection1-spn" class="cityDirection-spn bth__inp-lbl active">Город</span>
                                        <label id="cityDirection1-lbl" class="cityDirection-lbl bth__inp  uppercase ">Не важно</label>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div id="formDirectionsTabCountry"  class="formDirectionsTabCountry formDirections__top-tab super-grey ">Укажите страну</div>
                                            </div>
                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionCity" name="Tour[directionCity2]" class="sumo-direction-city">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--200">
                                    <div class="bth__inp-block js-show-formDirections ">
                                        <span id="cityFly-spn" class="cityFly-spn bth__inp-lbl active">Город вылета</span>
                                        <span id="cityFly-lbl" class="cityFly-lbl bth__inp uppercase">не важно</span>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                            </div>

                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionFlyCity" name="Tour[directionFlyCity2]" class="sumo-department">
                                                    <?php foreach ($parameters['flyCities'] as $flyCity): ?>
                                                        <option data-id="<?=$flyCity['id']?>"><?=$flyCity['name']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl hotel-param-lbl">Параметры отеля</span>
                                        <span class="bth__inp hotel-param-spn"></span>
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
                                                                    <input data-resort="0" data-attr="0;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel" id="catalog-positionckd-2" checked>
                                                                    <label class="label-cbx" for="catalog-positionckd-2">
                                                                        <span class="cbx-cnt">Любой тип</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php $main = 0;
                                                            foreach ($parameters['hotelAlloc'] as $key => $parameter): $main++?>
                                                                <div class="formDirections__cbx-ttl"><?=$key?></div>
                                                                <div class=" formDirections__left-30 ">
                                                                    <?php
                                                                    $iter = 0;
                                                                    foreach ($parameter['data'] as $data) : $iter++?>
                                                                        <div class="cbx-block   cbx-block--16 ">
                                                                            <input data-resort="<?=$main?>" data-attr="<?=$main."-".$iter?>;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel-<?= $parameter['eng']?>" id="hotel-allocate-2-<?= $parameter['eng']?><?=$iter?>">
                                                                            <label class="label-cbx" for="hotel-allocate-2-<?= $parameter['eng']?><?=$iter?>">
                                                                                <span class="cbx-cnt"><?=$data?></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelAllocation2', ['class'=>'hotelAllocation', 'value'=>'0'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-hotels" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="Любое питание;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="332eat2-typeckd" checked>
                                                                    <label class="label-cbx" for="332eat2-typeckd">
                                                                        <span class="cbx-cnt">Любое питание</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="AI;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="332eat2-type1">
                                                                    <label class="label-cbx" for="332eat2-type1">
                                                                        <span class="cbx-cnt">AI Все включено</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="FB;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="332eat2-type2">
                                                                    <label class="label-cbx" for="332eat2-type2">
                                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="HB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="332eat2-type3">
                                                                    <label class="label-cbx" for="332eat2-type3">
                                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block     cbx-block--16">
                                                                    <input data-attr="BB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="332eat2-type4">
                                                                    <label class="label-cbx" for="332eat2-type4">
                                                                        <span class="cbx-cnt">BB Завтрак</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="RO;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="332eat2-type5">
                                                                    <label class="label-cbx" for="332eat2-type5">
                                                                        <span class="cbx-cnt">RO Без питания</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelEating2', ['class'=>'hotelEating'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-stars">
                                                        <div class="formDirections__bottom-blocks">
                                                            <?php $iter = 0;
                                                            foreach ($parameters['hotelTypes'] as $type): $iter++?>
                                                                <div class="form-dropdown-stars__item ">
                                                                    <div class="cbx-block  cbx-block--16  ">
                                                                        <?php
                                                                        $stars = (int)$type['name'][0];
                                                                        $length = strlen($type['name']);?>
                                                                        <input data-attr="<?=$type['name']?>;" type="checkbox" class="cbx hotel-param hotel-param-type"  id="332stars-<?=$iter?>">
                                                                        <label class="label-cbx " for="332stars-<?=$iter?>">
                                                                            <?php
                                                                            if($stars) :?>
                                                                                <?php for ($i = 0; $i < $stars; $i++):?>
                                                                                    <i class="fa fa-star"></i>
                                                                                <?php endfor;?>
                                                                                <?php if(strpos($type['name'], "luxe") or strpos($type['name'], "lux")):?>
                                                                                    <span>luxe</span>
                                                                                <?php endif;?>
                                                                            <?php else: ?>
                                                                                <?=$type['name']?>
                                                                            <?php endif;?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelStars2', ['class'=>'hotelType'])?>
                                                    </div>
                                                    <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                                        <div class="form-dropdown-stars__item ">
                                                            <div class="rbt-block  ">
                                                                <input data-attr="Не важно" checked type="radio" name="332rating" class="rbt hotel-param hotel-param-rating" id="332rating1">
                                                                <label class="label-rbt" for="332rating1">
                                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php for($i = 5.0; $i >= 3.25; $i = $i-0.25): ?>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="rbt-block  ">
                                                                    <input data-attr="<?=$i?>;" type="radio" name="332rating" class="rbt hotel-param hotel-param-rating" id="332rating<?=$i?>">
                                                                    <label class="label-rbt" for="332rating<?=$i?>">
                                                                        <span class="rbt-cnt  uppercase"> Не ниже <?= $i?></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php endfor;?>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelRating2', ['class'=>'hotelRating'])?>
                                                    </div>

                                                    <div class="formDirections__bottom js-search-kid" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="детский горшок;" type="checkbox" class="cbx hotel-param hotel-param-children" id="332kid1">
                                                                    <label class="label-cbx" for="332kid1">
                                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="детские блюда;" type="checkbox" class="cbx hotel-param hotel-param-children" id="332kid2">
                                                                    <label class="label-cbx" for="332kid2">
                                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="пеленальный столик;" type="checkbox" class="cbx hotel-param hotel-param-children" id="332kid3">
                                                                    <label class="label-cbx" for="332kid3">
                                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="анимация;" type="checkbox" class="cbx hotel-param hotel-param-children" id="332kid4">
                                                                    <label class="label-cbx" for="332kid4">
                                                                        <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelChildren2', ['class'=>'hotelChildren'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-other" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="веселая анимация;" type="checkbox" class="cbx hotel-param hotel-param-other" id="332other1">
                                                                    <label class="label-cbx" for="332other1">
                                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="тусовки рядом с отелем;" type="checkbox" class="cbx hotel-param hotel-param-other" id="332other2">
                                                                    <label class="label-cbx" for="332other2">
                                                                        <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelOther2', ['class'=>'hotelOther'])?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-params-apply formDirections__btn-orange js-close-formDirections">Применить</div>
                                    </div>
                                </div>
                                <span class=" tour-selection-plus  hide-1023 js-del-field">
                                    <i class="fas fa-minus"></i>
                                </span>
                            </div>
                        </div>
                        <!--Поля 3-->
                        <div id="selectTour3" style="display: none">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                                <div class="tour-selection-field tour-selection-field--250 ">
                                    <div class="bth__inp-block">
                                        <span id="directionCountry-spn" class="directionCountry-spn bth__inp-lbl bth__inp-lbl--center active">Страна поездки</span>
                                        <div id="directionCountry-lbl" class="directionCountry-lbl bth__inp tour-selection__country  js-show-formDirections uppercase">
                                            <div class="tour-selection__flag lsfw-flag"></div>
                                            Не важно
                                        </div>
                                        <div class="formDirections w100p" style="display: none;">
                                            <div class="formDirections__wrap w100p">
                                                <div class="formDirections__top  formDirections__top-line">
                                                    <i class="formDirections__bottom-close"></i>
                                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                                </div>
                                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                    <select id="directionCountry" name="Tour[directionCountry3]" class="sumo-direction">
                                                        <option selected data-id=""></option>
                                                        <?php foreach ($parameters['countries'] as $country): ?>
                                                            <option data-id="<?=$country['id']?>"><?=$country['name']?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections">
                                        <span id="cityDirection1-spn" class="cityDirection-spn bth__inp-lbl active">Город</span>
                                        <label id="cityDirection1-lbl" class="cityDirection-lbl bth__inp  uppercase ">Не важно</label>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div id="formDirectionsTabCountry"  class="formDirectionsTabCountry formDirections__top-tab super-grey ">Укажите страну</div>
                                            </div>
                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionCity" name="Tour[directionCity3]" class="sumo-direction-city">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--200">
                                    <div class="bth__inp-block js-show-formDirections ">
                                        <span id="cityFly-spn" class="cityFly-spn bth__inp-lbl active">Город вылета</span>
                                        <span id="cityFly-lbl" class="cityFly-lbl bth__inp uppercase">не важно</span>
                                    </div>
                                    <div class="formDirections w100p" style="display: none;">
                                        <div class="formDirections__wrap w100p">
                                            <div class="formDirections__top  formDirections__top-line">
                                                <i class="formDirections__bottom-close"></i>
                                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                            </div>

                                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                                <select id="directionFlyCity" name="Tour[directionFlyCity3]" class="sumo-department">
                                                    <?php foreach ($parameters['flyCities'] as $flyCity): ?>
                                                        <option data-id="<?=$flyCity['id']?>"><?=$flyCity['name']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-selection-field tour-selection-field--180">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl hotel-param-lbl">Параметры отеля</span>
                                        <span class="bth__inp hotel-param-spn"></span>
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
                                                                    <input data-resort="0" data-attr="0;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel" id="catalog-positionckd" checked>
                                                                    <label class="label-cbx" for="catalog-positionckd">
                                                                        <span class="cbx-cnt">Любой тип</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php $main = 0;
                                                            foreach ($parameters['hotelAlloc'] as $key => $parameter): $main++?>
                                                                <div class="formDirections__cbx-ttl"><?=$key?></div>
                                                                <div class=" formDirections__left-30 ">
                                                                    <?php
                                                                    $iter = 0;
                                                                    foreach ($parameter['data'] as $data) : $iter++?>
                                                                        <div class="cbx-block   cbx-block--16 ">
                                                                            <input data-resort="<?=$main?>" data-attr="<?=$main."-".$iter?>;" type="checkbox" class="cbx hotel-param hotel-param-allocation hotel-<?= $parameter['eng']?>" id="hotel-allocate-<?= $parameter['eng']?><?=$iter?>">
                                                                            <label class="label-cbx" for="hotel-allocate-<?= $parameter['eng']?><?=$iter?>">
                                                                                <span class="cbx-cnt"><?=$data?></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelAllocation3', ['class'=>'hotelAllocation', 'value'=>'0'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-hotels" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="Любое питание;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="333eat2-typeckd" checked>
                                                                    <label class="label-cbx" for="333eat2-typeckd">
                                                                        <span class="cbx-cnt">Любое питание</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="AI;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="333eat2-type1">
                                                                    <label class="label-cbx" for="333eat2-type1">
                                                                        <span class="cbx-cnt">AI Все включено</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="FB;" type="checkbox" class="cbx hotel-param hotel-param-eating" id="333eat2-type2">
                                                                    <label class="label-cbx" for="333eat2-type2">
                                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="HB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="333eat2-type3">
                                                                    <label class="label-cbx" for="333eat2-type3">
                                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block     cbx-block--16">
                                                                    <input data-attr="BB;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="333eat2-type4">
                                                                    <label class="label-cbx" for="333eat2-type4">
                                                                        <span class="cbx-cnt">BB Завтрак</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="RO;" type="checkbox" class="cbx hotel-param hotel-param-eating"  id="333eat2-type5">
                                                                    <label class="label-cbx" for="333eat2-type5">
                                                                        <span class="cbx-cnt">RO Без питания</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelEating3', ['class'=>'hotelEating'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-stars">
                                                        <div class="formDirections__bottom-blocks">
                                                            <?php $iter = 0;
                                                            foreach ($parameters['hotelTypes'] as $type): $iter++?>
                                                                <div class="form-dropdown-stars__item ">
                                                                    <div class="cbx-block  cbx-block--16  ">
                                                                        <?php
                                                                        $stars = (int)$type['name'][0];
                                                                        $length = strlen($type['name']);?>
                                                                        <input data-attr="<?=$type['name']?>;" type="checkbox" class="cbx hotel-param hotel-param-type"  id="333stars-<?=$iter?>">
                                                                        <label class="label-cbx " for="333stars-<?=$iter?>">
                                                                            <?php
                                                                            if($stars) :?>
                                                                                <?php for ($i = 0; $i < $stars; $i++):?>
                                                                                    <i class="fa fa-star"></i>
                                                                                <?php endfor;?>
                                                                                <?php if(strpos($type['name'], "luxe") or strpos($type['name'], "lux")):?>
                                                                                    <span>luxe</span>
                                                                                <?php endif;?>
                                                                            <?php else: ?>
                                                                                <?=$type['name']?>
                                                                            <?php endif;?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelStars3', ['class'=>'hotelType'])?>
                                                    </div>
                                                    <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                                        <div class="form-dropdown-stars__item ">
                                                            <div class="rbt-block  ">
                                                                <input data-attr="Не важно" checked type="radio" name="333rating" class="rbt hotel-param hotel-param-rating" id="333rating1">
                                                                <label class="label-rbt" for="333rating1">
                                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php for($i = 5.0; $i >= 3.25; $i = $i-0.25): ?>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="rbt-block  ">
                                                                    <input data-attr="<?=$i?>;" type="radio" name="333rating" class="rbt hotel-param hotel-param-rating" id="333rating<?=$i?>">
                                                                    <label class="label-rbt" for="333rating<?=$i?>">
                                                                        <span class="rbt-cnt  uppercase"> Не ниже <?= $i?></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php endfor;?>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelRating3', ['class'=>'hotelRating'])?>
                                                    </div>

                                                    <div class="formDirections__bottom js-search-kid" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="детский горшок;" type="checkbox" class="cbx hotel-param hotel-param-children" id="333kid1">
                                                                    <label class="label-cbx" for="333kid1">
                                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="детские блюда;" type="checkbox" class="cbx hotel-param hotel-param-children" id="333kid2">
                                                                    <label class="label-cbx" for="333kid2">
                                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="пеленальный столик;" type="checkbox" class="cbx hotel-param hotel-param-children" id="333kid3">
                                                                    <label class="label-cbx" for="333kid3">
                                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="анимация;" type="checkbox" class="cbx hotel-param hotel-param-children" id="333kid4">
                                                                    <label class="label-cbx" for="333kid4">
                                                                        <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelChildren3', ['class'=>'hotelChildren'])?>
                                                    </div>
                                                    <div class="formDirections__bottom js-search-other" style="display: none">
                                                        <div class="formDirections__bottom-blocks">
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block   cbx-block--16  ">
                                                                    <input data-attr="веселая анимация;" type="checkbox" class="cbx hotel-param hotel-param-other" id="333other1">
                                                                    <label class="label-cbx" for="333other1">
                                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-dropdown-stars__item ">
                                                                <div class="cbx-block    cbx-block--16 ">
                                                                    <input data-attr="тусовки рядом с отелем;" type="checkbox" class="cbx hotel-param hotel-param-other" id="333other2">
                                                                    <label class="label-cbx" for="333other2">
                                                                        <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?= Html::activeHiddenInput($tourForm, 'directionHotelOther3', ['class'=>'hotelOther'])?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-params-apply formDirections__btn-orange js-close-formDirections">Применить</div>
                                    </div>
                                </div>
                                <span class=" tour-selection-plus  hide-1023 js-del-field">
                                    <i class="fas fa-minus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Выбор отеля-->
                    <div class=" js-types-search-hotel-blocks" style="display: none">
                        <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                            <div class="tour-selection-field tour-selection-field--250">
                                <div class="bth__inp-block js-show-formDirections">
                                    <span id="cityFlyHotel1-spn" class="bth__inp-lbl ">Город вылета</span>
                                    <span id="cityFlyHotel1-lbl" class="bth__inp"></span>
                                </div>

                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">
                                        <div class="formDirections__top  formDirections__top-line">
                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                        </div>
                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                            <select id="hotelFlyCity" name="Tour[hotelFlyCity]" class="sumo-department">
                                                <option data-id="0" selected>Без перелета</option>
                                                <?php foreach ($parameters['flyCities'] as $flyCity): ?>
                                                    <option data-id="<?=$flyCity['id']?>"><?=$flyCity['name']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tour-selection-field tour-selection-field--250">
                                <div class="bth__inp-block js-show-formDirections">
                                    <span class="bth__inp-lbl active">Питание</span>
                                    <span class="eating-spn bth__inp">Любое питание </span>
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
                                                        <input data-attr="Любое питание;" type="checkbox" class="cbx hotel-param-eating" id="330eat2-typeckd" checked>
                                                        <label class="label-cbx" for="330eat2-typeckd">
                                                            <span class="cbx-cnt">Любое питание</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="cbx-block    cbx-block--16 ">
                                                        <input data-attr="AI;" type="checkbox" class="cbx hotel-param-eating" id="330eat2-type1">
                                                        <label class="label-cbx" for="330eat2-type1">
                                                            <span class="cbx-cnt">AI Все включено</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="cbx-block   cbx-block--16  ">
                                                        <input data-attr="FB;" type="checkbox" class="cbx hotel-param-eating" id="330eat2-type2">
                                                        <label class="label-cbx" for="330eat2-type2">
                                                            <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="cbx-block    cbx-block--16 ">
                                                        <input data-attr="HB;" type="checkbox" class="cbx hotel-param-eating"  id="330eat2-type3">
                                                        <label class="label-cbx" for="330eat2-type3">
                                                            <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="cbx-block     cbx-block--16">
                                                        <input data-attr="BB;" type="checkbox" class="cbx hotel-param-eating"  id="330eat2-type4">
                                                        <label class="label-cbx" for="330eat2-type4">
                                                            <span class="cbx-cnt">BB Завтрак</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="cbx-block    cbx-block--16 ">
                                                        <input data-attr="RO;" type="checkbox" class="cbx hotel-param-eating"  id="330eat2-type5">
                                                        <label class="label-cbx" for="330eat2-type5">
                                                            <span class="cbx-cnt">RO Без питания</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <?= Html::activeHiddenInput($tourForm, 'hotelEating', ['class'=>'hiddenInputEating', 'value'=>'Любое питание'])?>
                                                <div class="formDirections__static-btn js-close-formDirections">Применить
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Первый отель-->
                        <div id="selectHotel1">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                                <div class="tour-selection-field tour-selection-field--740">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl">Добавить отель</span>
                                        <span class="bth__inp bth__inp-spn"></span>
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
                                                    <input class="bth__inp textInputHotelName" type="text" placeholder="Поиск отеля">
                                                </div>
                                                <div class="searchBlockResult formDirections__wrap  formDirections__bottom-blocks-cut">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?= Html::activeHiddenInput($tourForm, 'hotel1Country', ['class'=>'hiddenInputHotelCountry'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel1City', ['class'=>'hiddenInputHotelCity'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel1Rating', ['class'=>'hiddenInputHotelRating'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel1', ['class'=>'hiddenInputHotel'])?>
                                <span class="tour-selection-plus hide-1023 js-add-hotel">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                        </div>
                        <!--второй отель-->
                        <div id="selectHotel2" style="display: none">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                                <div class="tour-selection-field tour-selection-field--740">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl">Добавить отель</span>
                                        <span class="bth__inp bth__inp-spn"></span>
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
                                                    <input class="bth__inp textInputHotelName" type="text" placeholder="Поиск отеля">
                                                </div>
                                                <div class="searchBlockResult formDirections__wrap  formDirections__bottom-blocks-cut">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?= Html::activeHiddenInput($tourForm, 'hotel2Country', ['class'=>'hiddenInputHotelCountry'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel2City', ['class'=>'hiddenInputHotelCity'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel2Rating', ['class'=>'hiddenInputHotelRating'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel2', ['class'=>'hiddenInputHotel'])?>
                                <span class="tour-selection-plus hide-1023 js-del-hotel">
                                    <i class="fas fa-minus"></i>
                                </span>
                            </div>
                        </div>
                        <!--Третий отель-->
                        <div id="selectHotel3" style="display: none">
                            <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                                <div class="tour-selection-field tour-selection-field--740">
                                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                        <span class="bth__inp-lbl">Добавить отель</span>
                                        <span class="bth__inp bth__inp-spn"></span>
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
                                                    <input class="bth__inp textInputHotelName" type="text" placeholder="Поиск отеля">
                                                </div>
                                                <div class="searchBlockResult formDirections__wrap  formDirections__bottom-blocks-cut">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?= Html::activeHiddenInput($tourForm, 'hotel3Country', ['class'=>'hiddenInputHotelCountry'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel3City', ['class'=>'hiddenInputHotelCity'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel3Rating', ['class'=>'hiddenInputHotelRating'])?>
                                <?= Html::activeHiddenInput($tourForm, 'hotel3', ['class'=>'hiddenInputHotel'])?>
                                <span class="tour-selection-plus hide-1023 js-del-hotel">
                                    <i class="fas fa-minus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Дополнительные пожелания-->
                    <div class="tour-selection-wrap-in">
                        <div class="bth__ta-resizable-wrap">
                            <?= Html::activeTextarea($tourForm, 'tripParams', ['class'=>'bth__ta-resizable bth__inp', 'id'=>'tourParametrs'])?>
                            <label for="tourParametrs" class="bth__ta-resizable-hint">
                                <span class="">Дополнительные пожелания</span>
                            </label>
                        </div>
                    </div>
                    <!--Отправка заявки-->
                    <div class="tour-selection-wrap-in">
                        <div id="createLead" class=" bth__btn  bth__btn--fill bth__loader">
                            Сформировать заявку *
                            <div class=" bth__loader-spin">
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end();?>
            </div>
            <!--Кастомный тур-->
            <div class="panel" id="formPanel" style="display: none">
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
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
                        <div id="sendCustomTour" class=" bth__btn  bth__btn--fill bth__loader">
                            Отправить заявку*
                            <div class=" bth__loader-spin">
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
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
            <div class="panel" id="formStep2Panel" style="display: none">
                <div class="bth__cnt fz18 bold">Спасибо, Ваша заявка отправлена и будет обработана в ближайшее время.</div>
            </div>
            <!--Подбор тура Ш2-->
            <div class="panel" id="step2Panel" style="display: none">
                <div class="tour-selection-wrap">
                    <?php $tourform = ActiveForm::begin([
                        'method' => 'post',
                        //'action' => ['tophotels/help-selection#form'],
                        'id' => 'TourFormStep2'
                    ]) ?>
                    <?= Html::activeHiddenInput ($tourForm, 'tType', ['id'=>'SendDataTour', 'value'=>'2'])?>
                    <?= Html::activeHiddenInput ($tourForm, 'leadId', ['id'=>'LeadID'])?>
                    <div class="tour-selection-wrap-in mt0 tour-selection-wrap-flex">
                        <div class="tour-selection-field tour-selection-field--270">
                            <div class="js-add-error bth__inp-block  nameStep2">
                                <?= Html::activeTextInput($tourForm, 'name', ['class'=>'bth__inp js-label', 'id'=>'nameInput2'])?>
                                <?= Html::tag('label', 'Ваше имя', ['class'=>'bth__inp-lbl', 'for'=>'nameInput2'])?>
                                <div class="hint-block hint-block--abs">
                                    <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                    <div class="hint">
                                        <p class="bth__cnt">Поле не должно быть пустым</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tour-selection-field tour-selection-field--270">
                            <div class="js-add-error bth__inp-block phoneStep2">
                                <?= Html::activeTextInput($tourForm, 'phone', ['class'=>'bth__inp js-label', 'id'=>'phoneInput2'])?>
                                <?= Html::tag('label', 'Телефон', ['class'=>'bth__inp-lbl', 'for'=>'phoneInput2'])?>
                                <div class="hint-block hint-block--abs">
                                    <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                    <div class="hint">
                                        <p class="bth__cnt">Поле не должно быть пустым</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tour-selection-field tour-selection-field--270">
                            <div class="bth__inp-block  emailStep2">
                                <?= Html::activeTextInput($tourForm, 'email', ['class'=>'bth__inp js-label', 'id'=>'emailInput2'])?>
                                <?= Html::tag('label', 'Email (Необязательно)', ['class'=>'bth__inp-lbl', 'for'=>'emailInput2'])?>
                            </div>
                        </div>
                    </div>
                    <div class="bth__cnt uppercase mt20 ">Уточните удобные координаты для выбора турагенства</div>
                    <div class="tour-selection-wrap-in   tour-selection-wrap-flex ">
                        <div class="tour-selection-field tour-selection-field--270 ">
                            <div id="myCityBlock" class="bth__inp-block js-show-formDirections js-add-error">
                                <span id="MyCityLable" class="bth__inp-lbl active">Ваш город</span>
                                <span id="MyCitySpan" class="bth__inp">
                                Не указан
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
                                        <select id="directionMyCityStep2" name="Tour[mycity]" class="sumo-department">
                                            <option data-id="null" selected>Не указан</option>
                                            <?php foreach ($parameters['flyCities'] as $flyCity): ?>
                                                <option data-id="<?=$flyCity['id']?>"><?=$flyCity['name']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-wrap-in ">
                        <div href="#metro-valid-pp" class="metro-valid-pp bth__btn  bth__btn--fill bth__loader">
                            Отправить запрос*
                            <div class=" bth__loader-spin">
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                            *Нажимая на кнопку "отправить", я принимаю
                            <a href="#p-agreement-pp" class="p-agreement-pp agree">
                                Соглашение об обработке личных данных</a> и
                            <a href="#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                        </div>
                    </div>
                    <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
    </div>
</div>