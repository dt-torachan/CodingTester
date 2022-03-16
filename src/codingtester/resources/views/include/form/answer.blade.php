<div class="answer_wrap">
    <div class="title_wrap mb15">
        <h3 class="h3_title">
        解答欄
        </h3>
        <div class="answer_wrap_option">
            <select class="box form-control" name="language[id]" id="language_id">
                <option value="">使用する言語</option>
                <option value="2300">Java</option>
                <option value="2301">PHP</option>
                <option value="2302">Ruby</option>
                <option value="2321">Python3</option>
                <option value="2305">C</option>
                <option value="2306">C++</option>
                <option value="2307">C#</option>
                <option value="2308">JavaScript</option>
                <option value="2311">Go</option>
                <option value="2327">Rust(Beta)</option>
            </select>
        </div>
    </div>
    <form class="simple_form new_retry_result" id="code_hand_in" novalidate="novalidate" action="/challenges/44/retry_submit" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="SSvfXwR7FEj8-YrBIeJrW2BJciXL36QElX47jvEBGhA21pN7rh5oIS5b1yrFZugJo375jHOIsBn2EZ5Gy4bZGw"><input id="programming_language_id" type="hidden" name="retry_result[programming_language_id]">
        <input id="code" type="hidden" name="retry_result[code]">
    </form>
    <div class="editor_wrap">
        <div class="editor_area">
            <div id="editor-div" style="height: 280px; width: 100%;" class=" ace_editor ace-solarized-light">
                <textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="height:100%;width:100%;"></textarea>
            </div>
            <div class="compile-test-area">
                <div class="compile-test-area__input-select">
                    <label for="sample_input_no">動作確認で使うテストケースを選択</label>
                    <select name="sample_input_no" id="sample_input_no" class="select box">
                        <option value="0">入力例1</option>
                        <option value="1">入力例2</option>
                        <option value="2">入力例3</option>
                    </select>
                </div>
                <div class="compile-test-area__submit-button">
                    <button name="button" type="submit" id="do_compile" onclick="compile_ang_test('/challenges/44/compile_and_test')" class="btn btn-primary m-r-5"><i class="fa fa-gear"></i>
                    提出前動作確認
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>