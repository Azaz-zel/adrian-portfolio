@include("errors.layout", [
    "code" => "500",
    "title" => "Server Error",
    "heading" => "Something broke on <span class=\"text-gold\">my end.</span>",
    "message" => "An unexpected error occurred. It has been logged, so try again shortly.",
])
