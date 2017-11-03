<?php
/*
Copyright 2017 UUP dump authors

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

require_once 'shared/style.php';
styleUpper('downloads');
?>

<div class="ui horizontal divider">
    <h3><i class="options icon"></i>Choose options</h3>
</div>

<div class="ui top attached segment">
    <form class="ui form" action="./fetchupd.php" method="get">
        <div class="field">
            <label>Architecture</label>
            <select class="ui dropdown" name="arch">
                <option value="amd64">x64</option>
                <option value="x86">x86</option>
                <option value="arm64">arm64</option>
            </select>
        </div>

        <div class="field">
            <label>Ring</label>
            <select class="ui dropdown" name="ring">
                <option value="wif">Insider Fast</option>
                <option value="wis">Insider Slow</option>
                <option value="rp">Release Preview</option>
                <option value="retail">Retail</option>
            </select>
        </div>

        <div class="field">
            <label>Build number to use while fetching</label>
            <select class="ui search dropdown" name="build">
                <option value="15063.0">15063.0</option>
                <option value="15063.674">15063.674</option>
                <option value="16251.0" selected>16251.0</option>
                <option value="16299.0">16299.0</option>
                <option value="16299.15">16299.15</option>
                <option value="16299.19">16299.19</option>
                <option value="17025.1000">17025.1000</option>
            </select>
        </div>

        <div class="field">
            <label>Skip ahead flight</label>
            <div class="ui checkbox">
                <input type="checkbox" name="flight" value="skip">
                <label>Use skip ahead flighting (Insider Fast only)</label>
            </div>
        </div>

        <button class="ui fluid right labeled icon red button" type="submit">
            <i class="right arrow icon"></i>
            Fetch updates
        </button>
    </form>
</div>

<div class="ui bottom attached warning message">
    <i class="warning icon"></i>
    Clicking <i>Fetch updates</i> button will send your request to Windows Update servers.
</div>

<script>
$('.ui.checkbox').checkbox();
$('select.dropdown').dropdown();
</script>

<?php
styleLower();
?>
