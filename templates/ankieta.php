<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url_for('static',filename='styles.css') }}" type="text/css">
    <title>Ankieta</title>
</head>
<body>
    <form id="regForm" action="/form" method="POST">
        <style>
            .form-all:before {
                background: none;
            }
        </style>
        <h1>Gotowość społeczeństwa na innowacje medyczne</h1>
        <div class="tab">
            Pytania identyfikacyjne:
            <ul>
                <li class="" data-type="control" id="id_1">
                    <label class="form-line-label" id="label_1" for="input_1"><strong> Wiek</strong> </label>
                        <div class="form-single-column" role="group" aria-labelledby="label_1" data-component="radio" >
                            <input type="radio" aria-describedby="label_1" class="form-radio" id="input_1_0" name="wiek" value="Ponizej 18" />
                            <label id="label_input_1_0" for="input_1_0"> Ponizej 18 </label><br>
                            <input type="radio" aria-describedby="label_1" class="form-radio" id="input_1_1" name="wiek" value="18-25" />
                            <label id="label_input_1_1" for="input_1_1"> 18 - 25 </label><br>
                            <input type="radio" aria-describedby="label_1" class="form-radio" id="input_1_1" name="wiek" value="26-45" />
                            <label id="label_input_1_2" for="input_1_2"> 26 - 45 </label><br>
                            <input type="radio" aria-describedby="label_1" class="form-radio" id="input_1_1" name="wiek" value="Powyzej 45" />
                            <label id="label_input_1_3" for="input_1_3"> Powyzej 45 </label><br>
                        </div>
                </li>
                <li class="" data-type="control" id="id_2">
                    <label class="form-line-label" id="label_2" for="input_2"><strong>Płec</strong>  </label><br>
                        <div class="form-single-column" role="group" aria-labelledby="label_2" data-component="radio">
                            <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_0" name="plec" value="Kobieta" />
                            <label id="label_input_2_0" for="input_2_0"> Kobieta </label><br>
                            <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_1" name="plec" value="Mężczyzna" />
                            <label id="label_input_2_1" for="input_2_1"> Mężczyzna </label><br>
                            <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_2" name="plec" value="Inna" />
                            <label id="label_input_2_2" for="input_2_3"> Inna </label><br>
                            <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_3" name="plec" value="Wole nie odpowiadać" />
                            <label id="label_input_2_3" for="input_2_3"> Wole nie odpowiadać </label><br>
                        </div>
                </li>
                <li class="" data-type="control" id="id_3">
                    <label class="form-line-label" id="label_3" for="input_3"><strong> Jaki jest twój status zawodowy?</strong> </label><br>
                        <div class="form-single-column" role="group" aria-labelledby="label_3" data-component="radio">
                            <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_0" name="zawod" value="Pracujący" />
                            <label id="label_input_3_0" for="input_3_0"> Pracujący </label><br>
                            <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_1" name="zawod" value="Przedsiębiorca" />
                            <label id="label_input_3_1" for="input_3_1"> Przedsiębiorca </label><br>
                            <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_2" name="zawod" value="Bezrobotny" />
                            <label id="label_input_3_2" for="input_3_3"> Bezrobotny </label><br>
                            <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_3" name="zawod" value="Emeryt" />
                            <label id="label_input_3_3" for="input_3_3"> Emeryt </label><br>
                            <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_4" name="zawod" value="Student" />
                            <label id="label_input_3_4" for="input_3_4"> Student </label><br>
                        </div>
                <li class="" data-type="control" id="id_4">
                    <label class="form-line-label" id="label_4" for="input_4"> <strong>Wykształcenie</strong></label><br>
                        <div class="form-single-column" role="group" aria-labelledby="label_4" data-component="drop-down">
                            <select name="wyksztalcenie">
                                <option value="brak" selected="selected">Brak</option>
                                <option value="podstawowe">Podstawowe</option>
                                <option value="średnie">Średnie</option>
                                <option value="wyższe">Wyższe</option>
                            </select>
                        </div>
                </li>
                <li class="" data-type="control" id="id_5">
                    <label class="form-line-label" id="label_5" for="input_5"><strong>Zamieszkanie</strong></label><br>
                        <div class="form-single-column" role="group" aria-labelledby="label_5" data-component="drop-down">
                            <select name="zamieszkanie">
                                <option value="brak" selected="selected">Brak</option>
                                <option value="wieś">Wieś</option>
                                <option value="miasto_do_50">Miasto do 50 tys.</option>
                                <option value="miasto_50_150">Miasto od 50 do 150 tys.</option>
                                <option value="miasto_150_500">Miasto od 150 do 500 tys.</option>
                                <option value="miasto_500">Miasto powyżej 500 tys.</option>
                            </select>
                        </div>
                </li>
            </ul>
        </div>
        <div class="tab" style="display: none;">
            <ul style="">
                <li>
                    <label class="form-line=label" id="label_10" for="input_10"><strong>Gdzie spotkał/a się Pan/Pani z największą innowacyjnością w medycynie?</strong></label><br>
                    <input type="checkbox" id="gdzie_innowacja_1" name="gdzie_innowacje" value="Dziedzina_leczenia">
                    <label for="gdzie_innowacja_1"> w dziedzinie leczenia (np. innowacyjne leki)</label><br>
                    <input type="checkbox" id="gdzie_innowacje_2" name="gdzie_innowacje" value="Infrastruktura_diagnostyczna">
                    <label for="gdzie_innowacje_2"> w infrastrukturze potrzebnej do diagnozowania (np. nowoczesny sprzęt)</label><br>
                    <input type="checkbox" id="gdzie_innowacje_3" name="gdzie_innowacje" value="profilaktyka_promocja_tele">
                    <label for="gdzie_innowacje_3"> w działaniach profilaktyki i promocji zdrowia w rozwoju rozwiązań teleinformatycznych (np. telekonsultacje, aplikacje na urządzenia mobilne)</label><br>
                    <input type="checkbox" id="gdzie_innowacje_4" name="gdzie_innowacje" value="zarzadzanie_kadrami">
                    <label for="gdzie_innowacje_4">w zarządzaniu procesem leczenia w dziedzinie kształcenia kadr medycznych</label><br>
                    <input type="checkbox" id="gdzie_innowacje_5" name="gdzie_innowacje" value="zarzadzanie_placowkami">
                    <label for="gdzie_innowacje_5"> w dziedzinie zarządzania placówkami medycznymi</label><br>
                    <input type="checkbox" id="gdzie_innowacje_6" name="gdzie_innowacje" value="nigdzie">
                    <label for="gdzie_innowacje_6"> nie zetknęłam/-knąłem się</label><br>
                </li>
            </ul>
        </div>
        <div class="tab" style="display: none;">
            <ul style="">
                <li>
                    <label class="form-line=label" id="label_10" for="input_10"><strong>W jakiej dziedzinie medycyny według Pana/Pani potrzebna jest największa poprawa innowacyjności?</strong></label><br>
                    <input type="checkbox" id="pgdzie_innowacja_1" name="potrzebna_innowacja" value="Dziedzina_leczenia">
                    <label for="potrzebna_innowacja_1"> w dziedzinie leczenia (np. innowacyjne leki)</label><br>
                    <input type="checkbox" id="pgdzie_innowacje_2" name="potrzebna_innowacja" value="Infrastruktura_diagnostyczna">
                    <label for="potrzebna_innowacja_2"> w infrastrukturze potrzebnej do diagnozowania (np. nowoczesny sprzęt)</label><br>
                    <input type="checkbox" id="pgdzie_innowacje_3" name="potrzebna_innowacja" value="profilaktyka_promocja_tele">
                    <label for="potrzebna_innowacja_3"> w działaniach profilaktyki i promocji zdrowia w rozwoju rozwiązań teleinformatycznych (np. telekonsultacje, aplikacje na urządzenia mobilne)</label><br>
                    <input type="checkbox" id="pgdzie_innowacje_4" name="potrzebna_innowacja" value="zarzadzanie_kadrami">
                    <label for="potrzebna_innowacja_4">w zarządzaniu procesem leczenia w dziedzinie kształcenia kadr medycznych</label><br>
                    <input type="checkbox" id="potrzebna_innowacja_5" name="potrzebna_innowacja" value="zarzadzanie_placowkami">
                    <label for="potrzebna_innowacja_5"> w dziedzinie zarządzania placówkami medycznymi</label><br>
                    <input type="checkbox" id="potrzebna_innowacja_6" name="potrzebna_innowacja" value="nigdzie">
                    <label for="potrzebna_innowacja_6"> nie ma potrzeby innowacji w medycynie się</label><br>
                </li>
            </ul>
        </div>

        <div class="tab">
            <label class="form-line-label" data-type="control" id="id_6"><strong>Czy korzysta Pan/Pani z wizyt lekarskich?</strong></label><br>
                <div class="form-single-column" role="group" aria-labelledby="label_6" data-component="radio">
                    <input type="radio" aria-describedby="label_6" class="form-radio" id="input_6_0" name="czy_wizyta" value="Tak" />
                    <label id="label_input_6_0" for="input_6_0"> Tak </label>
                    <input type="radio" aria-describedby="label_6" class="form-radio" id="input_6_1" name="czy_wizyta" value="Nie" />
                    <label id="label_input_6_1" for="input_6_1"> Nie </label>
                </div>
            <ul style="">
                <li class="" data-type="control" id="id_7">
                    <label class="form-line=label" id="label_7" for="input_7"><strong>Jak często w skali od 1 do 5?</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_7" data-component="range">
                            <div class="range-value_7" id="range_7" name="jak_czesto"></div>
                            <label>prawie wcale</label>
                            <input id="input_7" name="jak_czesto" type="range" min="1" max="5" value="3" step="1">
                            <label>bardzo często</label>
                        </div>

                </li>
                <li data-type="control" id="id_8">
                    <label class="form-line=label" id="label_8" for="input_8"><strong>Czy korzysta Pan/Pani z NFZ?</strong></label><br>
                    <input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_0" name="czy_NFZ" value="Tak" />
                    <label id="label_input_8_0" for="input_8_0"> Tak </label>
                    <input type="radio" aria-describedby="label_8" class="form-radio" id="input_8_1" name="czy_NFZ" value="Nie" />
                    <label id="label_input_8_1" for="input_8_1"> Nie </label>
                </li>
                <li data-type="control" id="id_9">
                    <label class="form-line=label" id="label_9" for="input_9"><strong>Czy korzysta Pan/Pani z usług lekarza prywatnego?</strong></label><br>
                    <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="czy_prywatny" value="Tak" />
                    <label id="label_input_9_0" for="input_9_0"> Tak </label>
                    <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="czy_prywatny" value="Nie" />
                    <label id="label_input__1" for="input_9_1"> Nie </label>
                </li>
            </ul>
        </div>

        <div class="tab">
            <p>W dalszej części ankiety będziemy stawiać stwierdzenia, w skali od 1 do 5 proszę określić na ile zgadzają się Państwo z tym zdaniem.</p>
            <ul>
                <li class="" data-type="control" id="id_10">
                    <label class="form-line=label" id="label_10" for="input_10"><strong>Wprowadzenie innowacji wiąże się z ogromną inwigilacją.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_10" data-component="range">
                            <div class="range-value_10" id="range_10" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_10" name="suwak10" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>

                <li class="" data-type="control" id="id_11">
                    <label class="form-line=label" id="label_11" for="input_11"><strong>Boje się, że moje dane zostaną wykorzystane do złych celów (niezwiązanych z medycyną, ale nie tylko).</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_11" data-component="range">
                            <div class="range-value_11" id="range_11" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_11" name="suwak11" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>

                <li class="" data-type="control" id="id_12">
                    <label class="form-line=label" id="label_12" for="input_12"><strong> Innowacje są niezbędne do optymalizacji kosztów opieki zdrowotnej.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_12" data-component="range">
                            <div class="range-value_12" id="range_10" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_12" name="suwak12" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
            </ul>
        </div>

        <div class="tab">
            <ul>
                <li class="" data-type="control" id="id_13">
                    <label class="form-line=label" id="label_13" for="input_13"><strong>Innowacje medyczne nie niosą za sobą żadnych zagrożeń.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_13" data-component="range">
                            <div class="range-value_13" id="range_13" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_13" name="suwak13" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>

                <li class="" data-type="control" id="id_14">
                    <label class="form-line=label" id="label_10" for="input_14"><strong>Innowacje medyczne są bardzo kosztowne.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_14" data-component="range">
                            <div class="range-value_14" id="range_14" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_14" name="suwak14" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>


            </ul>
        </div>

        <div class="tab">
            <ul>
                <li class="" data-type="control" id="id_15">
                    <label class="form-line=label" id="label_15" for="input_15"><strong>Jestem w stanie płacić dużo większe podatki na rzecz innowacji medycznych.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_15" data-component="range">
                            <div class="range-value_15" id="range_10" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_15" name="suwak15" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>



                <li class="" data-type="control" id="id_16">
                    <label class="form-line=label" id="label_16" for="input_16"><strong> Innowacje medyczne są łatwo dostępne.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_16" data-component="range">
                            <div class="range-value_16" id="range_16" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_16" name="suwak16" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
            </ul>
        </div>


        <div class="tab">
            <ul>
                <li class="" data-type="control" id="id_17">
                    <label class="form-line=label" id="label_10" for="input_10"><strong>W razie konieczności pozwolił(a)bym się operować przez robota.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_17" data-component="range">
                            <div class="range-value_17" id="range_17" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_17" name="suwak17" type="range" min="1" max="5" value="3" step="1" >
                            <label>Zgadzam się</label>
                        </div>

                </li>

                <li class="" data-type="control" id="id_18">
                    <label class="form-line=label" id="label_18" for="input_18"><strong>Pozwolił(a)bym, gdyby to do mnie należała decyzja, by bliską mi osobę operował robot..</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_18" data-component="range">
                            <div class="range-value_18" id="range_18" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_18" name="suwak18" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>

                <li class="" data-type="control" id="id_19">
                    <label class="form-line=label" id="label_19" for="input_19"><strong>Wolał(a)bym by operowany przez lekarza człowieka niż robota lekarza.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_19" data-component="range">
                            <div class="range-value_19" id="range_19" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_19" name="suwak19" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
            </ul>
        </div>

        <div class="tab">
            <ul>
                <li class="" data-type="control" id="id_20">
                    <label class="form-line=label" id="label_20" for="input_20"><strong>Wolał(a)bym, gdyby to do mnie należała decyzja, by bliską mi osobę operował lekarz człowiek niż robot lekarz.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_20" data-component="range">
                            <div class="range-value_20" id="range_20" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_20" name="suwak20" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
                <li class="" data-type="control" id="id_21">
                    <label class="form-line=label" id="label_21" for="input_21"><strong>Hipotetycznie w razie wypadku pozwolił(a)bym na wszczepienie sobie sztucznego serca.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_21" data-component="range">
                            <div class="range-value_21" id="range_21" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_21" name="suwak21" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
                <li class="" data-type="control" id="id_22">
                    <label class="form-line=label" id="label_22" for="input_22"><strong>Hipotetycznie w razie wypadku, gdyby to do mnie należała decyzja, pozwolił(a)bym na wszczepienie osobie bliskiej sztucznego serca.</strong></label><br>
                        <div class="range-wrap" role="group" aria-labelledby="label_22" data-component="range">
                            <div class="range-value_22" id="range_22" name="jak_czesto"></div>
                            <label>Nie zgadzam się</label>
                            <input id="input_22" name="suwak22" type="range" min="1" max="5" value="3" step="1">
                            <label>Zgadzam się</label>
                        </div>

                </li>
            </ul>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>

        </div>
    </form>



    <script src="{{ url_for('static',filename='javaScript.js') }}"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
