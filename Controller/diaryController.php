<?php

function getTheView($diaries)
{
    $str = "<div class=\"row\">";
    for ($i = 0; $i < count($diaries["titles"]); $i++) {
        $str .= "<div class=\"col-6\">
        <div class=\"card diary-center\" style=\"width: 18rem;\">
            <div class=\"diary-border card-body\">
                <h5 class=\"card-title\" id=\"title\">" . $diaries["titles"][$i] . "</h5>
                <p class=\"card-text\" id=\"content\">" . $diaries["contents"][$i] . "</p>
            </div>
        </div>
    </div>
</div>";
    }

    $str .= "</div>";
    $str .= getInputDiaryView();
    return $str;
}

function getInputDiaryView()
{

    $view = "
    <hr>
<div class=\"row diary\">
    <div class=\"col-2\"></div>
    <div class=\"col-8\">
        <form>
            <div class=\"form-group\">
                <label for=\"title\">Title:</label>
                <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"Title\" name=\"title\">
            </div>

            <div class=\"form-group\">
                <label for=\"content\">Content:</label>
                <textarea class=\"form-control\" id=\"content\" rows=\"6\" name=\"content\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-info\" name=\"add\">Add</button>
        </form>
    </div>
    <div class=\"col-2\"></div>
</div>";
    return $view;
}