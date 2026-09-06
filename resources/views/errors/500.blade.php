@include("errors.layout", [
    "code" => "500",
    "title" => "Server Error",
    "heading" => "Something broke on <span class=\"italic text-gold\">my end.</span>",
    "message" => "An unexpected error occurred. It is being logged — try again shortly.",
])
