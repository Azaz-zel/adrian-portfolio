@include("errors.layout", [
    "code" => "403",
    "title" => "Forbidden",
    "heading" => "This page is <span class=\"italic text-gold\">private.</span>",
    "message" => "You do not have access to this part of the site.",
])
