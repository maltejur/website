<?php
/*
UUP dump translation file.

Translation information:
English language name: Japanese
Localized language name: 日本語
Language code: ja-JP
Authors: noriokun4649
*/

//Language information
$s['code'] = 'ja-JP';
$s['timeZone'] = 'Asia/Tokyo'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'ビルド';
$s['arch'] = 'アーキテクチャ';
$s['ring'] = 'チャネル';
$s['updateid'] = '更新 ID';
$s['update'] = '更新';
$s['lang'] = '言語';
$s['edition'] = 'エディション';
$s['seachForBuilds'] = 'ビルドを検索...';
$s['no'] = 'いいえ';
$s['yes'] = 'はい';
$s['yesRecommended'] = 'はい (推奨)';
$s['next'] = '次へ';
$s['ok'] = 'OK';
$s['cancel'] = 'キャンセル';
$s['information'] = '情報';
$s['totalDlSize'] = '合計ダウンロードサイズ';
$s['file'] = 'ファイル';
$s['expires'] = 'Expires';
$s['sha1'] = 'SHA-1';
$s['size'] = 'サイズ';
$s['additionalEdition'] = '追加エディション';
$s['requiredEdition'] = '必須エディション';
$s['unknown'] = '不明';

//global
$s['home'] = 'ホーム';
$s['downloads'] = 'ダウンロード';
$s['lightMode'] = 'ライトモード';
$s['darkMode'] = 'ダークモード';
$s['sourceCode'] = 'ソースコード';
$s['menu'] = 'メニュー';
$s['websiteDesc'] = 'Windows Update サーバからUUPファイルを簡単にダウンロードできます。このプロジェクトは米国Microsoft Corporationとは一切関係ありません。';
$s['notAffiliated'] = 'このプロジェクトは米国Microsoft Corporationとは一切関係ありません。Microsoft、Windowsは、米国Microsoft Corporationの米国およびその他の国における登録商標または商標です。';
$s['copyright'] = '© %d %s and contributors.'; //© 2019 whatever127 and contributors.
$s['selectLanguage'] = '言語を選択';

//index.php
$s['slogan'] = 'Windows Update サーバからUUPファイルを簡単にダウンロードできます。';
$s['quickOptions'] = 'クイックオプション';
$s['tHeadReleaseType'] = 'リリースタイプ';
$s['tHeadDescription'] = '説明';
$s['tHeadArchitectures'] = 'アーキテクチャ';
$s['latestPublicRelease'] = '最新の公開ビルド';
$s['latestPublicReleaseSub'] = '一般的なユーザー向けに更新された最新ビルドです。';
$s['latestDevRelease'] = '最新のDev チャネル';
$s['latestDevReleaseSub'] = '最新の機能を備えた信頼性の低いビルド。<br>非常に専門的なユーザーに最適です。';
$s['latestBetaRelease'] = '最新のベータチャネル';
$s['latestBetaReleaseSub'] = '今後提供されるほとんどの機能を備えたDev チャネルより信頼性の高いビルド。<br>早期導入者に最適です。';
$s['latestRPRelease'] = '最新のリリースプレビューチャネル';
$s['latestRPReleaseSub'] = '次のリリースをプレビューするための信頼性の高いビルド。<br>今後のリリースを試すのに最適です。';
$s['advOptions'] = '詳細オプション';
$s['browseBuilds'] = '既知のビルドを参照';
$s['browseBuildsSub'] = 'すでに検出されたビルドを選択してダウンロードします。';
$s['fetchLatest'] = '最新ビルドを取得';
$s['fetchLatestSub'] = 'Windows Updateサーバから最新のビルド情報を取得します。 ';
$s['newlyAdded'] = '最近追加されたビルド';
$s['dateAdded'] = '追加された日付';

//known.php
$s['browseKnown'] = '既知のビルドを参照';
$s['chooseBuild'] = 'ビルドを選択';
$s['weFoundBuilds'] = '<b>%d</b>件 見つかりました。'; //<b>692</b> builds were found for your query.

//latest.php
$s['latestFetchLatest'] = '最新ビルドを取得';
$s['latestTestingOnly'] = 'テスト目的のみ';
$s['latestTestingOnlyWarn'] = '<b>This page is provided for testing purposes only.</b> Builds retrieved by this page that were not processed by the backend server will be provided using fallback packs, which may provide incomplete results. If you want to download an already known build, please use the known builds page instead.';
$s['latestDoYouWantKnown'] = '既知のビルドを参照して続行しますか？';
$s['chooseOptions'] = 'パラメータを選択';
$s['buildOfPretendedClient'] = 'Windows Updateの疑似的なクライアントビルド番号';
$s['editionOfPretendedClient'] = 'システムの疑似的なエディション';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Use skip ahead flighting (Insider Fast only)';
$s['fetchUpdates'] = '更新を取得';
$s['fetchUpdatesInfo'] = '<i>更新プログラムの取得</i>ボタンをクリックして、リクエストをWindows Updateサーバーに送信します。';

//fetchupd.php
$s['responseFromServer'] = 'サーバレスポンス結果';
$s['foundUpdates'] = '%d件 更新が見つかりました'; //Found 1 update(s)
$s['foundTheseUpdates'] = '次の更新が見つかりました。目的の更新の名前をクリックして続行します。';
$s['buildNumber'] = 'ビルド番号: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '%s の言語を選択'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '言語を選択';
$s['chooseLangDesc'] = '利用したい言語を選択してください';
$s['allLangs'] = 'すべての言語';
$s['selLangFiles'] = 'ファイル';
$s['allFiles'] = 'すべてのファイル';
$s['wubOnly'] = 'WindowsUpdateBox のみ';
$s['updateOnly'] = '更新のみ';
$s['selectLangInfoText1'] = '<i>次へ</i>ボタンをクリックして、目的のエディションを選択します。';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exeおよび累積的な更新プログラムは、<i>すべての言語</i>で提供されています。';
$s['allLangsWarn'] = '<i>すべての言語</i>オプションでは、エディションの選択はサポートされていません。';
$s['clickNextToOpenFindFiles'] = '<i>次へ</i>ボタンをクリックして、ファイルを検索できるページを開きます。';
$s['noLangsAvailable'] = 'このビルドで使用できる言語はありません。<br>このビルドはISOイメージに変換できません。<br>詳細は <a href="faq.php">FAQ</a> を参照してください。';
$s['browseFiles'] = 'ファイルを参照';
$s['browseFilesDesc'] = '選択したビルドのファイルをすばやく参照する';
$s['searchFiles'] = 'ファイルを検索';
$s['toSearchForCUUseQuery'] = '累積的な更新プログラムを検索するには、<i>%s</i> 検索クエリを使用します。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.

//selectedition.php
$s['selectEditionFor'] = '%s のエディションを選択'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'エディションを選択';
$s['chooseEditionDesc'] = '利用したいエディションを選択してください';
$s['allEditions'] = 'すべてのエディション';
$s['selectEditionInfoText'] = '<i>次へ</i>ボタンをクリックして概要ページを開きます。';
$s['additionalEditionsInfo'] = 'If you need <b>additional editions</b> from the table on the right, select their <b>Required edition</b> above and proceed by clicking <i>Next</i>.<br>On the summary page select the <b>Create additional editions</b> option.';

//download.php
$s['summary'] = '概要';
$s['summaryDesc'] = '選択内容を確認し、ダウンロード方法を選択';
$s['summaryFor'] = '%s の概要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '選択内容の概要';
$s['browseList'] = 'ファイル一覧を検索';
$s['browseListDesc'] = 'Opens the page with a list of files in the UUP set for manual download.';
$s['aria2Opt1'] = 'UUPセットをダウンロード';
$s['aria2Opt1Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードできます。';
$s['aria2Opt2'] = 'ダウンロードしてISOに変換';
$s['aria2Opt2Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードした後にISOに変換できます。';
$s['aria2Opt3'] = 'ダウンロード、エディションの追加、ISOへの変換';
$s['aria2Opt3Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードし、追加のエディションを作成した後にISOイメージに変換します。';
$s['jsRequiredToConf'] = 'このオプションを設定して使用するには、JavaScriptが必要です。';
$s['selAdditionalEditions'] = '追加エディションの選択';
$s['noAdditionalEditions'] = '選択したエディションで使用できる追加エディションはありません。';
$s['learnMore'] = '詳しく見る';
$s['learnMoreAdditionalEditions1'] = 'このオプションは、選択した追加エディションの自動作成を有効にします。';
$s['learnMoreAdditionalEditions2'] = '追加エディションのリストは、選択した基本エディションによって決まります。以下では、目的の追加エディションを作成するために必要な基本エディションのリストを確認できます:';
$s['learnMoreUpdates1'] = '更新は、変換スクリプトが次のシステムで実行された場合にのみ、変換されたイメージに統合されます:';
$s['learnMoreUpdates2'] = '他のシステムで変換スクリプトを実行すると、更新は変換されたイメージに統合されません。';
$s['systemWithAdk'] = 'Windows 10 ADK がインストールされている %s'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '追加の更新';
$s['additionalUpdatesDesc'] = 'このUUPセットでは、変換プロセス中に追加の更新を統合するように設定しているため作成時間が大幅に増加する恐れがあります。';
$s['browseUpdatesList'] = '更新プログラムの一覧を参照する';
$s['selectDownloadOptions'] = 'ダウンロードオプションを選択';
$s['selectDownloadOptionsSub'] = '選択した項目をダウンロードする方法を設定します';
$s['downloadMethod'] = 'ダウンロード方法';
$s['conversionOptions'] = '変換オプション';
$s['convOpt1'] = 'install.wimの代わりにinstall.esdを使用してISOを作成する';
$s['convOpt2'] = '可能な場合は更新プログラムをISOに統合する (Windowsコンバータのみ)';
$s['convOpt3'] = '更新プログラムの統合後にクリーンアップを実行する (Windowsコンバータのみ)';
$s['convOpt4'] = 'NET Framework 3.5 をISOに統合する(Windowsコンバータのみ)';
$s['startDownload'] = 'ダウンロードパッケージを作成';

//get.php
$s['listOfFilesFor'] = '%s のファイル一覧'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '合計ファイルサイズ: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'ファイル名変更スクリプト';
$s['fileRenamingScriptDesc1'] = 'このスクリプトを使用すると、ダウンロードしたファイルの名前をすばやく変更できます。';
$s['fileRenamingScriptDesc2'] = '以下のフォームの内容を<code>cmd</code>拡張子の新しいファイルにコピペし、ダウンロードしたファイルのあるフォルダに入れて実行します。';
$s['sha1File'] = 'SHA-1 チェックサムファイル';
$s['sha1FileDesc'] = 'このファイルを使用すると、ファイルが正しくダウンロードされたことをすばやく確認できます。';
$s['aria2NoticeTitle'] = 'aria2を利用したダウンロードについて';
$s['aria2NoticeText1'] = 'aria2を使用したダウンロードでは、ダウンロードに必要なアーカイブを作成しダウンロードします。このアーカイブには、選択したタスクを実行するために必要なすべてのファイルが含まれています。';
$s['aria2NoticeText2'] = 'ダウンロードを開始するには、ダウンロードに利用するプラットフォームに合わせたスクリプトを実行する必要があります:';
$s['aria2NoticeText3'] = 'Aria2はオープンソースのプロジェクトです。こちらを参照してください: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP変換スクリプト(Windows版)は%sによって作成されました。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP変換スクリプト(Linux版、macOS版)はオープンソースのプロジェクトです。こちらを参照してください: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '%s のファイルを検索'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'このページからダウンロードしたファイルの名前をすばやく変更するには、名前変更スクリプトを生成します。これにより、自動的に名前が変更されます。';
$s['fileRenamingScriptGenW'] = '名前変更スクリプトの生成 (Windows)';
$s['fileRenamingScriptGenL'] = '名前変更スクリプトを生成(Linux、macOS)';
$s['searchForFiles'] = 'ファイルを検索...';
$s['weFoundFiles'] = '<b>%d</b>個 のファイルが見つかりました。'; //We have found <b>692</b> files for your query.

//faq.php
$s['faq'] = 'FAQ';
$s['faqLong'] = 'よくある質問 誤訳を報告 ';

$s['q1'] = '機能更新プログラムと累積更新プログラムの違いは何ですか？';
$s['a1'] = <<<FAQ
機能更新プログラムには、基本的な更新と追加の更新が含まれます。<br/>
累積更新プログラムには基本的な更新のみ含まれます。<br/><br/>

一般的には、機能更新プログラムを利用してISOファイルを生成することをお勧めします。
FAQ;

$s['q2'] = 'Windows 10(Enterpriseなど) のISOを作成するには？';
$s['a2'] = <<<FAQ
Enterprise is a <b>virtual edition</b> of Windows 10. "Virtual" here does not mean "for virtualization", but rather "not standalone".<br/><br/>

Virtual editions require a "base edition" for conversion.<br/>
When selecting the edition for a given update, on the right side of the page you will find a table with requirements for different virtual editions.<br/>
For "Windows 10 Enterprise" the requirement is "Windows 10 Pro", which is what you will need to select first.<br/><br/>

After selecting Pro click "Next" and choose the "convert and create additional editions" option.<br/>
A list with all possible virtual editions for your selection will appear;<br/><br/>

From there you can choose "Enterprise" and create a download package.
FAQ;

$s['q3'] = 'Why do some Windows Server downloads show "There are no languages available for this build."?';
$s['a3'] = <<<FAQ
Older Windows Server Updates only have Feature on Demand packages.<br/>
You cannot use them for conversion purposes.
FAQ;

$s['q4'] = 'Can I remove some packages I think are useless before the conversion process?';
$s['a4'] = <<<FAQ
You can't. The conversion will fail if you do this.
FAQ;

$s['q5'] = 'The same build exists twice, but one with a (2) attached. What does that mean?';
$s['a5'] = <<<FAQ
In general, this means that the build was pushed to more than one channel.<br/>
For example, a build was first pushed into the Dev channel and then pushed into the Beta channel.<br/><br/>

It does not matter which one you choose, they have absolutely the same content.
FAQ;

$s['qUnknown'] = 'I have a question not listed here.';
$s['aUnknown'] =  <<<FAQ
You can join UUP dump discord server and ask your question there.
Only questions in English will be answered.
FAQ;

//Error pages
$s['error'] = 'Error';
$s['requestNotSuccessful'] = 'リクエストは成功しませんでした';
$s['anErrorHasOccurred'] = 'リクエストの処理中にエラーが発生しました。';
$s['generatedPackNotAvailable'] = '生成されたパックは使用できません';
$s['generatedPackNotAvailableDesc'] = 'この更新プログラムには、使用可能な言語、エディション、およびファイルに関する完全な情報を提供するパックが生成されていません。代替えのパックが使用され、正しい情報が提供されない場合があります。そのためダウンロードに失敗した場合は、パックが使用可能になるまでしばらくお待ちください。';
$s['arm64Warning'] = 'これは<b>ARM64</b>ビルドで、<b>一般的なIntel/AMDプロセッサとの互換性はありません</b>。<br>対象のデバイスに<b>ARM64</b>プロセッサが搭載されている事を理解していて<b>AMD64</b>と混同していない場合安全にインストール出来ます。';

//Error messages
$s['error_ERROR'] = '一般エラー.';
$s['error_UNSUPPORTED_API'] = 'インストールされているAPIのバージョンは、このバージョンのUUP dumpと互換性がありません。';
$s['error_NO_FILEINFO_DIR'] = '<i>fileinfo</i>ディレクトリが存在しません。';
$s['error_NO_BUILDS_IN_FILEINFO'] = '<i>fileinfo</i>データベースにビルドが含まれていません。';
$s['error_SEARCH_NO_RESULTS'] = '実行されたクエリのアイテムが見つかりませんでした。';
$s['error_UNKNOWN_ARCH'] = '不明なプロセッサアーキテクチャです。';
$s['error_UNKNOWN_RING'] = '不明なチャネルです。';
$s['error_UNKNOWN_FLIGHT'] = 'Unknown flight.';
$s['error_UNKNOWN_COMBINATION'] = 'The flight and ring combination is not correct. Skip ahead is only supported for Insider Fast ring.';
$s['error_ILLEGAL_BUILD'] = 'Specified build number is less than %d or larger than %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Specified build minor is incorrect.';
$s['error_NO_UPDATE_FOUND'] = 'The server returned no updates.';
$s['error_XML_PARSE_ERROR'] = 'Response XML parsing failed. There may be a problem with Microsoft servers. Try again later.';
$s['error_EMPTY_FILELIST'] = 'The server has returned an empty file list.';
$s['error_NO_FILES'] = 'There are no files available for your selection.';
$s['error_NOT_FOUND'] = 'Specified selection cannot be found.';
$s['error_MISSING_FILES'] = 'The selected UUP set has missing files.';
$s['error_NO_METADATA_ESD'] = 'There are no metadata ESD files available for your selection.';
$s['error_UNSUPPORTED_LANG'] = 'Specified language is not supported.';
$s['error_UNSPECIFIED_LANG'] = 'Language was not specified.';
$s['error_UNSUPPORTED_EDITION'] = 'Specified edition is not supported.';
$s['error_UNSUPPORTED_COMBINATION'] = 'The language and edition combination is not correct.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Selected update does not contain a Cumulative Update.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Information about the specified update doesn\'t exist in the database.';
$s['error_KEY_NOT_EXISTS'] = 'Specified key does not exist in update information.';
$s['error_UNSPECIFIED_UPDATE'] = 'Update ID was not specified.';
$s['error_INCORRECT_ID'] = 'Specified Update ID is incorrect. Please make sure that the specified Update ID is correct.';
$s['error_RATE_LIMITED'] = 'You are being rate limited. Please try again in a few seconds.';
$s['error_UNSPECIFIED_VE'] = 'You have not selected any additional editions. If do not wish to create additional editions, please use the <i>Download using aria2 and convert</i> option.';
$s['errorNoMessage'] = 'エラーメッセージは利用できません.';

//Languages
$s['lang_ar-sa'] = 'アラビア語（サウジアラビア）';
$s['lang_bg-bg'] = 'ブルガリア語';
$s['lang_cs-cz'] = 'チェコ語';
$s['lang_da-dk'] = 'デンマーク語';
$s['lang_de-de'] = 'ドイツ語';
$s['lang_el-gr'] = 'ギリシャ語';
$s['lang_en-gb'] = '英語（イギリス）';
$s['lang_en-us'] = '英語（米国）';
$s['lang_es-es'] = 'スペイン語（スペイン）';
$s['lang_es-mx'] = 'スペイン語（メキシコ）';
$s['lang_et-ee'] = 'エストニア語';
$s['lang_fi-fi'] = 'フィンランド語';
$s['lang_fr-ca'] = 'フランス語（カナダ）';
$s['lang_fr-fr'] = 'フランス語（フランス）';
$s['lang_he-il'] = 'ヘブライ語';
$s['lang_hr-hr'] = 'クロアチア語';
$s['lang_hu-hu'] = 'ハンガリー語';
$s['lang_it-it'] = 'イタリア語';
$s['lang_ja-jp'] = '日本語';
$s['lang_ko-kr'] = '韓国語';
$s['lang_lt-lt'] = 'リトアニア語';
$s['lang_lv-lv'] = 'ラトビア語';
$s['lang_nb-no'] = 'ノルウェー語（ブークモール）';
$s['lang_nl-nl'] = 'オランダ語';
$s['lang_pl-pl'] = 'ポーランド語';
$s['lang_pt-br'] = 'ポルトガル語（ブラジル）';
$s['lang_pt-pt'] = 'ポルトガル語（ポルトガル）';
$s['lang_qps-ploc'] = '擬似言語';
$s['lang_ro-ro'] = 'ルーマニア語';
$s['lang_ru-ru'] = 'ロシア語';
$s['lang_sk-sk'] = 'スロバキア語';
$s['lang_sl-si'] = 'スロベニア語';
$s['lang_sr-latn-rs'] = 'セルビア語（ラテン）';
$s['lang_sv-se'] = 'スウェーデン語';
$s['lang_th-th'] = 'タイ語';
$s['lang_tr-tr'] = 'トルコ語';
$s['lang_uk-ua'] = 'ウクライナ語';
$s['lang_zh-cn'] = '中国語（簡体字）';
$s['lang_zh-hk'] = '中国語（香港）';
$s['lang_zh-tw'] = '中国語（繁体字）'; 
