@extends('/layouts/app')

@section('banner')
    @include('_banner')
@endsection

@section('content')
    <html xmlns:o="urn:schemas-microsoft-com:office:office"
          xmlns:x="urn:schemas-microsoft-com:office:excel"
          xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
        <meta name=ProgId content=Excel.Sheet>
        <meta name=Generator content="Microsoft Excel 15">
        <link rel=File-List href="2015-2016_fichiers/filelist.xml">
        <style id="2014-2015.xlsx_7611_Styles"><!--table
            {mso-displayed-decimal-separator:"\,";
                mso-displayed-thousand-separator:" ";}
            .font57611
            {color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;}
            .font67611
            {color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:underline;
                text-underline-style:single;
                font-family:Arial, sans-serif;
                mso-font-charset:0;}
            .xl637611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:1.0pt solid black;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:nowrap;}
            .xl647611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:nowrap;}
            .xl657611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"dd\\-mmm";
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:normal;}
            .xl667611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl677611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#D9D9D9;
                mso-pattern:#D9D9D9 none;
                white-space:normal;}
            .xl687611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl697611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:1.0pt solid black;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl707611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:1.0pt solid black;
                background:#D9D9D9;
                mso-pattern:#D9D9D9 none;
                white-space:nowrap;}
            .xl717611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl727611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:right;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl737611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:windowtext;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl747611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl757611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl767611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl777611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                border-top:none;
                border-right:none;
                border-bottom:none;
                border-left:1.0pt solid black;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl787611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:center;
                vertical-align:middle;
                border:1.0pt solid black;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl797611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl807611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl817611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:1.0pt solid black;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl827611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl837611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:general;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:normal;}
            .xl847611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:normal;}
            .xl857611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:normal;}
            .xl867611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:1.0pt solid black;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:normal;}
            .xl877611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#D9D9D9;
                mso-pattern:#D9D9D9 none;
                white-space:normal;}
            .xl887611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:0;
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#D9D9D9;
                mso-pattern:#D9D9D9 none;
                white-space:normal;}
            .xl897611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:1.0pt solid black;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl907611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl917611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:right;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl927611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:left;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl937611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:1.0pt solid black;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:#339933;
                mso-pattern:#339933 none;
                white-space:nowrap;}
            .xl947611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl957611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl967611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:normal;}
            .xl977611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:normal;}
            .xl987611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:normal;}
            .xl997611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1007611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1017611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                background:#F42C2C;
                mso-pattern:#F42C2C none;
                white-space:nowrap;}
            .xl1027611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                background:#F42C2C;
                mso-pattern:#F42C2C none;
                white-space:nowrap;}
            .xl1037611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl1047611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                background:#E0E0E0;
                mso-pattern:#E0E0E0 none;
                white-space:nowrap;}
            .xl1057611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1067611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1077611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1087611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:top;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl1097611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1107611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1117611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1127611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:white;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:"Short Date";
                text-align:center;
                vertical-align:middle;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1137611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1147611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:none;
                border-right:1.0pt solid black;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1157611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:none;
                border-right:1.0pt solid black;
                border-bottom:1.0pt solid black;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1167611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:1.0pt solid black;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl1177611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:1.0pt solid black;
                border-left:none;
                background:white;
                mso-pattern:white none;
                white-space:nowrap;}
            .xl1187611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:1.0pt solid black;
                border-right:1.0pt solid black;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1197611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:windowtext;
                font-size:10.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                border-top:none;
                border-right:1.0pt solid black;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1207611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:windowtext;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:none;
                border-right:1.0pt solid black;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1217611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:windowtext;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border-top:none;
                border-right:1.0pt solid black;
                border-bottom:1.0pt solid black;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl1227611
            {padding-top:1px;
                padding-right:1px;
                padding-left:1px;
                mso-ignore:padding;
                color:black;
                font-size:10.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Arial, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:left;
                vertical-align:bottom;
                border-top:1.0pt solid black;
                border-right:none;
                border-bottom:none;
                border-left:none;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            --></style>
    </head>

    <body>
    <!--[if !excel]>&nbsp;&nbsp;<![endif]-->
    <!--Les informations suivantes ont été générées par l’Assistant Publier en tant
que page web de Microsoft Excel.-->
    <!--SI vous republiez le même élément à partir d'Excel, toutes les informations
entre les balises DIV seront remplacées.-->
    <!----------------------------->
    <!--DÉBUT DE LA SORTIE À PARTIR DE L'ASSISTANT PUBLIER EN TANT QUE PAGE WEB
D'EXCEL -->
    <!----------------------------->

    <div id="2014-2015.xlsx_7611" align=center x:publishsource="Excel">

        <table border=0 cellpadding=0 cellspacing=0 width=6182 class=xl947611
               style='border-collapse:collapse;table-layout:fixed;width:4664pt'>
            <col class=xl947611 width=66 style='mso-width-source:userset;mso-width-alt:
 2413;width:50pt'>
            <col class=xl947611 width=187 style='mso-width-source:userset;mso-width-alt:
 6838;width:140pt'>
            <col class=xl947611 width=53 style='mso-width-source:userset;mso-width-alt:
 1938;width:40pt'>
            <col class=xl947611 width=152 style='mso-width-source:userset;mso-width-alt:
 5558;width:114pt'>
            <col class=xl947611 width=53 span=6 style='mso-width-source:userset;
 mso-width-alt:1938;width:40pt'>
            <col class=xl947611 width=106 span=51 style='width:80pt'>
            <tr height=37 style='mso-height-source:userset;height:27.75pt'>
                <td height=37 class=xl1117611 colspan=2 width=253 style='height:27.75pt;
  width:190pt'>Championnat d'hiver-printemps :</td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=152 style='width:114pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=53 style='width:40pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
                <td class=xl947611 width=106 style='width:80pt'></td>
            </tr>
            <tr height=34 style='mso-height-source:userset;height:25.5pt'>
                <td height=34 class=xl1017611 style='height:25.5pt'>Rang</td>
                <td class=xl1027611>Equipe</td>
                <td class=xl1017611>Points</td>
                <td class=xl1017611>J</td>
                <td class=xl1017611>G</td>
                <td class=xl1017611>N</td>
                <td class=xl1017611>P</td>
                <td class=xl1017611>bp</td>
                <td class=xl1017611>bc</td>
                <td class=xl1017611>Diff.</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=37 style='mso-height-source:userset;height:27.75pt'>
                <td height=37 class=xl1037611 style='height:27.75pt'>1</td>
                <td class=xl717611>Les Bretons</td>
                <td class=xl1037611>18</td>
                <td class=xl1037611>6</td>
                <td class=xl1037611>6</td>
                <td class=xl1037611>0</td>
                <td class=xl1037611>0</td>
                <td class=xl1037611>74</td>
                <td class=xl1037611>23</td>
                <td class=xl1037611>51</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                <td height=36 class=xl1047611 style='height:27.0pt'>2</td>
                <td class=xl717611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>Les Matadors</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>3</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>3</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>1</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>0</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>2</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>24</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>27</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>-3</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=34 style='mso-height-source:userset;height:25.5pt'>
                <td height=34 class=xl1037611 style='height:25.5pt'>3</td>
                <td class=xl717611>Fucking Football Friends</td>
                <td class=xl1037611>3</td>
                <td class=xl1037611>3</td>
                <td class=xl1037611>1</td>
                <td class=xl1037611>0</td>
                <td class=xl1037611>2</td>
                <td class=xl1037611>11</td>
                <td class=xl1037611>31</td>
                <td class=xl1037611>-20</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=34 style='mso-height-source:userset;height:25.5pt'>
                <td height=34 class=xl1047611 style='height:25.5pt'>4</td>
                <td class=xl717611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>Les Jeanne d'Arc de Bamako</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>0</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>4</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>0</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>0</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>4</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>14</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>41</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>-27</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=34 style='mso-height-source:userset;height:25.5pt'>
                <td height=34 class=xl1077611 style='height:25.5pt'></td>
                <td class=xl717611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl1037611>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=0 style='display:none;mso-height-source:userset;mso-height-alt:
  645'>
                <td class=xl1077611></td>
                <td class=xl717611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=37 style='mso-height-source:userset;height:27.75pt'>
                <td height=37 class=xl1057611 colspan=2 style='height:27.75pt'>Championnat
                    d'automne :</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:24.75pt'>
                <td height=33 class=xl1017611 style='height:24.75pt'>Rang</td>
                <td class=xl1027611>Equipe</td>
                <td class=xl1017611>Points</td>
                <td class=xl1017611>J</td>
                <td class=xl1017611>G</td>
                <td class=xl1017611>N</td>
                <td class=xl1017611>P</td>
                <td class=xl1017611>bp</td>
                <td class=xl1017611>bc</td>
                <td class=xl1017611>Diff.</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:24.75pt'>
                <td height=33 class=xl1037611 style='height:24.75pt'>1</td>
                <td class=xl717611>Les Bretons</td>
                <td class=xl1037611>15</td>
                <td class=xl1037611>6</td>
                <td class=xl1037611>5</td>
                <td class=xl1037611>0</td>
                <td class=xl1037611>1</td>
                <td class=xl1037611>69</td>
                <td class=xl1037611>25</td>
                <td class=xl1037611>44</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:24.75pt'>
                <td height=33 class=xl1047611 style='height:24.75pt'>2</td>
                <td class=xl717611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>Les Matadors</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>11</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>6</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>3</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>2</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>1</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>44</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>27</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>17</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:24.75pt'>
                <td height=33 class=xl1037611 style='height:24.75pt'>3</td>
                <td class=xl717611>Les Jeanne d'Arc de Bamako</td>
                <td class=xl1037611>4</td>
                <td class=xl1037611>5</td>
                <td class=xl1037611>1</td>
                <td class=xl1037611>1</td>
                <td class=xl1037611>3</td>
                <td class=xl1037611>24</td>
                <td class=xl1037611>39</td>
                <td class=xl1037611>-15</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=33 style='mso-height-source:userset;height:24.75pt'>
                <td height=33 class=xl1047611 style='height:24.75pt'>4</td>
                <td class=xl717611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>Fucking Football Friends</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>1</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>5</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>0</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>1</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>4</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>15</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>61</td>
                <td class=xl1037611 style='font-size:10.0pt;color:black;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial, sans-serif;border:none;background:#E0E0E0;mso-pattern:
  #E0E0E0 none'>-46</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=20 style='height:15.0pt'>
                <td height=20 class=xl947611 style='height:15.0pt'></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=35 style='mso-height-source:userset;height:26.25pt'>
                <td height=35 class=xl1067611 colspan=4 style='height:26.25pt'>Tous les
                    matchs de ce calendrier sont au Five la Villette</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611>Les Bretons</td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611>Les Matadors</td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611>Les Jeanne d'Arc de Bamako</td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611>Fucking Football Friends</td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl957611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1087611 colspan=2 style='height:20.25pt'><font
                            class="font67611">Championnat d'automne</font><font class="font57611"> :</font></td>
                <td class=xl737611>&nbsp;</td>
                <td class=xl727611>&nbsp;</td>
                <td class=xl727611>&nbsp;</td>
                <td class=xl747611 width=53 style='width:40pt'>&nbsp;</td>
                <td class=xl747611 width=53 style='width:40pt'>&nbsp;</td>
                <td class=xl757611>&nbsp;</td>
                <td class=xl767611 width=53 style='width:40pt'>&nbsp;</td>
                <td class=xl767611 width=53 style='width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl947611></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl987611 width=106 style='width:80pt'></td>
                <td class=xl967611 width=106 style='width:80pt'>Joués</td>
                <td class=xl777611 width=106 style='width:80pt'>Gagnés</td>
                <td class=xl967611 width=106 style='width:80pt'>Perdus</td>
                <td class=xl967611 width=106 style='width:80pt'>buts pour</td>
                <td class=xl967611 width=106 style='width:80pt'>buts contre</td>
                <td class=xl977611 width=106 style='width:80pt'></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=5 height=135 class=xl1207611 style='border-bottom:1.0pt solid black;
  height:101.25pt'>OCTOBRE</td>
                <td class=xl787611 style='border-left:none'>08/10/2015</td>
                <td class=xl897611 style='border-left:none'>21h</td>
                <td class=xl697611>Les Matadors</td>
                <td class=xl797611 width=53 style='width:40pt'>9</td>
                <td class=xl667611 width=53 style='width:40pt'>-</td>
                <td class=xl807611 width=53 style='width:40pt'>6</td>
                <td class=xl687611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>9</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>6</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>15/10/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl637611 style='border-top:none'>Les Bretons</td>
                <td class=xl847611 width=53 style='border-top:none;width:40pt'>17</td>
                <td class=xl657611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>2</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Fucking
                    Football Friends</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>17</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>2</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>22/10/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>9</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>6</td>
                <td class=xl687611 colspan=2>Les Matadors</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>6</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>9</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>9</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>6</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>22/10/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>7</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>29/10/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>10</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl1007611>Les Jean<span style='display:none'>ne d'Arc de Bamako</span></td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>10</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>5</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt;border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl897611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=4 height=108 class=xl1187611 style='border-bottom:1.0pt solid black;
  height:81.0pt;border-top:none'>NOVEMBRE</td>
                <td class=xl787611 style='border-top:none;border-left:none'>05/11/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>3</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>18</td>
                <td class=xl647611 colspan=2>Les Matadors</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>18</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>3</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>12/11/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>19</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl687611 colspan=3 style='border-right:1.0pt solid black'>Fucking
                    Football Friends</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>19</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>5</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>19/11/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl637611 style='border-top:none'>Les Matadors</td>
                <td class=xl847611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl657611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>5</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>5</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>26/11/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl687611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt;border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl897611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=3 height=81 class=xl1187611 style='height:60.75pt;border-top:
  none'>DECEMBRE</td>
                <td class=xl787611 style='border-top:none;border-left:none'>03/12/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Les Bretons</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>4</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>6</td>
                <td class=xl647611 colspan=2>Les Matadors</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>6</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>4</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>4</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>6</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>10/12/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>10</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>1</td>
                <td class=xl1007611>Les Jean<span style='display:none'>ne d'Arc de Bamako</span></td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>10</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>1</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>17/12/2015</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>0</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>0</td>
                <td class=xl647611 colspan=2>Les Matadors</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>1</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl837611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
                <td class=xl997611 align=right>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl777611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl827611 align=right width=106 style='width:80pt'>0</td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl897611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl997611></td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl777611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl827611 width=106 style='width:80pt'>&nbsp;</td>
                <td class=xl947611></td>
            </tr>
            <tr class=xl1137611 height=27 style='mso-height-source:userset;height:20.25pt'>
                <td colspan=4 height=27 class=xl1227611 style='height:20.25pt'>Vainqueur du
                    championnat d'automne : Les Bretons</td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
                <td class=xl1137611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl947611 style='height:20.25pt'></td>
                <td class=xl947611></td>
                <td class=xl1127611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr class=xl997611 height=27 style='mso-height-source:userset;height:20.25pt'>
                <td colspan=3 height=27 class=xl1057611 style='height:20.25pt'><font
                            class="font67611">Championnat d'hiver-printemps</font><font class="font57611">
                        :</font></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
                <td class=xl997611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=2 height=54 class=xl1207611 style='height:40.5pt'>JANVIER</td>
                <td class=xl787611 style='border-left:none'>21/01/2016</td>
                <td class=xl897611 style='border-left:none'>21h</td>
                <td class=xl697611>Les Matadors</td>
                <td class=xl797611 width=53 style='width:40pt'>6</td>
                <td class=xl667611 width=53 style='width:40pt'>-</td>
                <td class=xl807611 width=53 style='width:40pt'>10</td>
                <td class=xl687611 colspan=2>Les Bretons</td>
                <td class=xl817611 width=53 style='width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>28/01/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl637611 style='border-top:none'>Les Bretons</td>
                <td class=xl847611 width=53 style='border-top:none;width:40pt'>14</td>
                <td class=xl657611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>3</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Fucking
                    Football Friends</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl897611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=4 height=108 class=xl1187611 style='border-bottom:1.0pt solid black;
  height:81.0pt;border-top:none'>FEVRIER</td>
                <td class=xl787611 style='border-top:none;border-left:none'>04/02/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Jeanne d'Arc de Bamako</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>4</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>12</td>
                <td class=xl687611 colspan=2>Les Matadors</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>11/02/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>4</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>18/02/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>14</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>5</td>
                <td class=xl1007611>Les Jean<span style='display:none'>ne d'Arc de Bamako</span></td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>25/02/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl647611 colspan=2>Les Matadors</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt;border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl897611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=5 height=135 class=xl1187611 style='border-bottom:1.0pt solid black;
  height:101.25pt;border-top:none'>MARS</td>
                <td class=xl787611 style='border-top:none;border-left:none'>03/03/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl707611 style='border-top:none'>Les Bretons</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>13</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>3</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Fucking
                    Football Friends</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>10/03/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl697611 style='border-top:none'>Les Matadors</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl687611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>24/03/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h30</td>
                <td class=xl637611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl847611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl657611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>31/03/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h30</td>
                <td class=xl697611 style='border-top:none'>Les Bretons</td>
                <td class=xl797611 width=53 style='border-top:none;width:40pt'>13</td>
                <td class=xl667611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>6</td>
                <td class=xl687611 colspan=2>Les Matadors</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>07/04/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h30</td>
                <td class=xl707611 style='border-top:none'>Les Bretons</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>10</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>0</td>
                <td class=xl647611 colspan=3 style='border-right:1.0pt solid black'>Les
                    Jeanne d'Arc de Bama<span style='display:none'>ko</span></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt;border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1097611 style='height:20.25pt'>AVRIL</td>
                <td class=xl787611 style='border-top:none'>21/04/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h30</td>
                <td class=xl707611 style='border-top:none'>Fucking Football Friends</td>
                <td class=xl877611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl677611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl887611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl647611 colspan=2>Les Matadors</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr class=xl1067611 height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1067611 colspan=3 style='height:20.25pt'>Vainqueur du
                    championnat d'hiver-printemps :</td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
            </tr>
            <tr class=xl1067611 height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1067611 style='height:20.25pt'></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
                <td class=xl1067611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1067611 colspan=2 style='height:20.25pt'><font
                            class="font67611">Coupe des pingouins</font><font class="font57611"> :</font></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td rowspan=2 height=54 class=xl1147611 style='border-bottom:1.0pt solid black;
  height:40.5pt'>AVRIL</td>
                <td class=xl787611 style='border-left:none'>02/06/2016</td>
                <td class=xl897611 style='border-left:none'>21h</td>
                <td class=xl697611>Les Bretons</td>
                <td class=xl797611 width=53 style='width:40pt'>5</td>
                <td class=xl667611 width=53 style='width:40pt'>-</td>
                <td class=xl807611 width=53 style='width:40pt'>2</td>
                <td class=xl687611 colspan=3 style='border-right:1.0pt solid black'>Fucking
                    Football Friends</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl787611 style='height:20.25pt;border-top:none;
  border-left:none'>09/06/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td class=xl637611 style='border-top:none'>&nbsp;</td>
                <td class=xl847611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl657611 width=53 style='border-top:none;width:40pt'>-</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl647611 style='border-top:none'>&nbsp;</td>
                <td class=xl857611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl867611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl897611 style='height:20.25pt;border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl917611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl927611 style='border-top:none'>&nbsp;</td>
                <td class=xl907611 style='border-top:none'>&nbsp;</td>
                <td class=xl937611 style='border-top:none'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <tr height=27 style='mso-height-source:userset;height:20.25pt'>
                <td height=27 class=xl1107611 style='height:20.25pt;border-top:none'>MAI</td>
                <td class=xl787611 style='border-top:none'>16/06/2016</td>
                <td class=xl897611 style='border-top:none;border-left:none'>21h</td>
                <td colspan=5 class=xl1167611>Finale de la coupe</td>
                <td class=xl807611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl817611 width=53 style='border-top:none;width:40pt'>&nbsp;</td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
                <td class=xl947611></td>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=66 style='width:50pt'></td>
                <td width=187 style='width:140pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=152 style='width:114pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=53 style='width:40pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
                <td width=106 style='width:80pt'></td>
            </tr>
            <![endif]>
        </table>

    </div>


    <!----------------------------->
    <!--FIN DE LA SORTIE À PARTIR DE L'ASSISTANT PUBLIER EN TANT QUE PAGE WEB
D'EXCEL-->
    <!----------------------------->
    </body>

    </html>

@endsection