# Codewars PHP

---

## 8Kyu - A Needle in the Haystack

**DESCRIPTION:**

Can you find the needle in the haystack?

Write a function `findNeedle()` that takes an `array` full of junk but containing one `"needle"`

After your function finds the needle it should return a message (as a string) that says:

`"found the needle at position "` plus the `index` it found the needle, so:

Example(Input --> Output)

```PHP
["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5"
```

---

### Given Code


```PHP
function findNeedle($haystack) {
// your code here
}
```

---

### Solution


```PHP
function findNeedle($haystack) {
    foreach($haystack as $index => $value) {
        if ($value === 'needle') return "found the needle at position ".$index;
    }
}
```

---


[See on CodeWars.com](https://www.codewars.com/kata/56676e8fabd2d1ff3000000c)