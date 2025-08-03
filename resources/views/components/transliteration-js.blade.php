<script>
  const translitMap = new Map([
    ['ЗГ', 'Zgh'], ['Зг', 'Zgh'], ['зг', 'zgh'],
    ['А', 'A'], ['Б', 'B'], ['В', 'V'], ['Г', 'H'], ['Ґ', 'G'],
    ['Д', 'D'], ['Е', 'E'], ['Є', 'Ye'], ['Ж', 'Zh'], ['З', 'Z'],
    ['И', 'Y'], ['І', 'I'], ['Ї', 'Yi'], ['Й', 'Y'], ['К', 'K'],
    ['Л', 'L'], ['М', 'M'], ['Н', 'N'], ['О', 'O'], ['П', 'P'],
    ['Р', 'R'], ['С', 'S'], ['Т', 'T'], ['У', 'U'], ['Ф', 'F'],
    ['Х', 'X'], ['Ц', 'Ts'], ['Ч', 'Ch'], ['Ш', 'Sh'], ['Щ', 'Shch'],
    ['Ь', ''], ['Ю', 'Yu'], ['Я', 'Ya'], ['’', ''], ["'", ''],

    ['а', 'a'], ['б', 'b'], ['в', 'v'], ['г', 'h'], ['ґ', 'g'],
    ['д', 'd'], ['е', 'e'], ['є', 'ye'], ['ж', 'zh'], ['з', 'z'],
    ['и', 'y'], ['і', 'i'], ['ї', 'yi'], ['й', 'y'], ['к', 'k'],
    ['л', 'l'], ['м', 'm'], ['н', 'n'], ['о', 'o'], ['п', 'p'],
    ['р', 'r'], ['с', 's'], ['т', 't'], ['у', 'u'], ['ф', 'f'],
    ['х', 'x'], ['ц', 'ts'], ['ч', 'ch'], ['ш', 'sh'], ['щ', 'shch'],
    ['ь', ''], ['ю', 'yu'], ['я', 'ya']
  ]);

  const initialMap = new Map([
    ['Є', 'Ye'], ['Ї', 'Yi'], ['Й', 'Y'], ['Ю', 'Yu'], ['Я', 'Ya'],
    ['є', 'ye'], ['ї', 'yi'], ['й', 'y'], ['ю', 'yu'], ['я', 'ya'],
  ]);

  function transliterate(text) {
    // Handle word-initial cases
    text = text.replace(/\b[ЄЇЙЮЯєїйюя]/g, match => initialMap.get(match) || match);

    // Apply transliteration in key-length order
    const sortedKeys = [...translitMap.keys()].sort((a, b) => b.length - a.length);
    for (const key of sortedKeys) {
      const value = translitMap.get(key);
      text = text.split(key).join(value);
    }

    return text;
  }

  // Recursively walk text nodes and apply transliteration
  function transliterateTextNodes(node) {
    if (node.nodeType === Node.TEXT_NODE) {
      node.textContent = transliterate(node.textContent);
    } else {
      for (let child of node.childNodes) {
        transliterateTextNodes(child);
      }
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
    let transliterated = false;
    const button = document.getElementById("translit-toggle");

    button.addEventListener("click", function () {
      const elements = document.querySelectorAll(".ukrainian-text");

      elements.forEach(el => {
        if (!transliterated) {
          el.dataset.originalHtml = el.innerHTML;
          transliterateTextNodes(el);
        } else {
          el.innerHTML = el.dataset.originalHtml;
        }
      });

      transliterated = !transliterated;
    //   button.innerText = transliterated ? "Hide Transliteration" : "Show Transliteration";
    });
  });
</script>
