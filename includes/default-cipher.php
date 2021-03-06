<hr class="hr-text" data-content="OR">

<div class="row">
    <div class="col-md-10 offset-md-1 text-center">
        <h2>Find matching cipher values by number</h2>
        <p>
            Have you found a unique word, phrase, or <em>nom de plume</em>? NAEQ<small>UERY</small> provides an exclusive tool to highlight<br class="hidden-md-down"> significant words by number value ― "112 &hellip; tells you you’re in <em>important territory</em>"
        </p>
    </div>
</div>

<!--Accordion wrapper-->
<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card above-subcard">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingDefaultCipher1">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseDefaultCipher1" aria-expanded="false"
            aria-controls="collapseDefaultCipher1">
                <h5 class="mb-0">
                    NAEQ<small>UERY</small> <small>DECIPHER TOOL</small>: <strong class="cipher-value"></strong>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseDefaultCipher1" class="collapse show" role="tabpanel" aria-labelledby="headingDefaultCipher1" data-parent="#headingDefaultCipher1">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="number" class="form-control naeq-input" placeholder="Enter a cipher number value (ie: 112)" pattern="\d*" min="0" onkeypress="return event.charCode != 45">
                        <label class="error">You must enter a cipher number value and text</label>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-check" style="display: none!important;">
                            <label class="form-check-label">
                                <input class="form-check-input radio-inline" type="radio" name="cipherType" value="cipher6" checked>
                                Cipher 6 (ALW)
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input radio-inline" type="radio" name="cipherType" value="cipherX">
                                Cipher X (KFW)
                            </label>
                        </div>

                    </div>
                </div>

                <textarea class="form-control naeq-textarea" spellcheck="false" placeholder="Enter words, numbers, phrases or excerpts" maxlength="10000" rows="5"></textarea>
                
                <div class="naeq-analyze-row">
                    <div class="row text-right">
                        <div class="col-md-12">
                            <span class="text-counter">10000 character(s) left</span>
                        </div>
                    </div>
                    <button type="button" class="naeq-analyze btn btn-primary">Analyze text</button>
                </div>

                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <div class="cipher-matches"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card subcard filter">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingDefaultCipher2">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseDefaultCipher2" aria-expanded="false"
            aria-controls="collapseDefaultCipher2">
                <h5 class="mb-0">
                    See examples of usage <strong class="cipher-value"></strong>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseDefaultCipher2" class="collapse quotes" role="tabpanel" aria-labelledby="headingDefaultCipher2" data-parent="#headingDefaultCipher2">
            <div class="card-body">
                <blockquote>
                    <p><q>112 = WE ARE ONE, the code phrase that tells you you’re in important territory, but also THY WIFE and LETTER and WORDS AND SIGNS and INK AND BLACK and ALL HOUSE OF GOD and THE WHEEL and I AM 49 PLACE and, as you noted CROSS 52 I FLAP.</q></p>
                    <p><strong>MATCHES: WE ARE ONE, THY WIFE, LETTER, WORDS AND SIGNS, INK AND BLACK, ALL HOUSE OF GOD, THE WHEEL, I AM PLACE, CROSS I FLAP</strong></p>
                    <p><strong>CIPHER VALUE: 112</strong></p>
                </blockquote>

                <blockquote>
                    <p><q>Ray Palmer told UFOlogists for years that he had a FACT which allowed him to decode cases. Palmer’s “FACT” is actually the cipher itself; FACT = 56 in cipher, or 5 + 6 = 11, the basis (i.e., the number 11) for deciphering the code.</q></p>
                    <p><strong>MATCHES: FACT, HAD</strong></p>
                    <p><strong>CIPHER VALUE: 11</strong></p>
                </blockquote>

                <blockquote class="last">
                    <p><q>Crowley justifies The Book of the Law itself by asserting that Aiwass “showed his KNOWLEDGE chiefly by the use of cipher or cryptogram in certain passages.” However, other, related so-called Class A documents apparently inspired by Aleister Crowley can also be profitably employed in a similar way.</q></p>
                    <p><strong>MATCH: KNOWLEDGE</strong></p>
                    <p><strong>CIPHER VALUE: 102</strong></p>
                </blockquote>

                <p class="example-sources">Sources: "Interview with Terry R. Wriste June 24, 1994", "The Basic Premise”, "Secret Cipher of the UFOnauts Developed” by<br class="hidden-md-down"> Allen H. Greenfield, <em>The Complete Secret Cipher of the UFOnauts</em></p>
            </div>
        </div>

    </div>
    <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->