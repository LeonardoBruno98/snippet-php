$lowercases = ['a','b', 'c'];    
$uppercases = array_map(function($letter) {
    return strtoupper($letter);
}, $lowercases); // ['A','B', 'C']
