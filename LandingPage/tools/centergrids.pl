use strict; use warnings;
# Convert responsive auto-fit card grids -> centered flex (.card-grid).
# Only touches `repeat(auto-fit, minmax(Npx, 1fr))` grids (card lists).
# Leaves fixed/2-col (`1fr 1fr`, `repeat(2,...)`) layouts untouched.
local $/;
for my $f (@ARGV) {
    open my $in, '<', $f or next;
    my $s = <$in>; close $in;
    my $orig = $s;
    $s =~ s{
        style="display:\s*grid;\s*grid-template-columns:\s*
        repeat\(auto-fit,\s*minmax\((\d+)px,\s*1fr\)\);\s*
        gap:\s*([\d.]+(?:rem|px));\s*([^"]*)"
    }{
        my ($min,$gap,$extra) = ($1,$2,$3);
        my $max = $min + 140;
        $extra =~ s/^\s+//; $extra =~ s/\s+$//;
        qq{class="card-grid" style="--card-min: ${min}px; --card-max: ${max}px; --card-gap: ${gap};}
        . ($extra ne "" ? " $extra" : "") . qq{"}
    }gex;
    if ($s ne $orig) {
        open my $out, '>', $f or next;
        print $out $s; close $out;
        print "updated $f\n";
    }
}
