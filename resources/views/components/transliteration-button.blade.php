<!-- <button id="translit-toggle" class="btn btn-primary rounded shadow-lg"
    style="position: fixed; top: 5.125rem; right: 1.5rem; z-index: 1000;
          box-shadow: 0.125rem .25rem .375rem rgba(0, 0, 0, 0.25)  ">
    <span class="d-none d-md-inline">Transliterate | Київ→Kyiv</span>
    <span class="d-inline d-md-none">аб→ab</span>
</button>
 -->

 <style>
.translit-toggle {
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 0.75rem;
  background-color: #f8f9fa;
  border: 2px solid rgba(0, 123, 255, 0.3);

  border-radius: 999px;
  position: fixed;
  top: 5.125rem;
  right: 1.5rem;
  z-index: 1000;
  font-size: 0.875rem;
  color: #007bff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.translit-toggle .label-left,
.translit-toggle .label-right {
  font-weight: bold;
  padding: 0 0.5rem;
}

.toggle-track {
  position: relative;
  width: 36px;
  height: 20px;
  background-color: #e0e0e0;
  border-radius: 999px;
  margin: 0 0.25rem;
  transition: background-color 0.3s ease;
}

.toggle-circle {
  position: absolute;
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  background-color: #007bff;
  border-radius: 50%;
  transition: left 0.3s ease;
}

/* Toggled State */
.translit-toggle.toggled .toggle-circle {
  left: 18px;
}

.translit-toggle.toggled {
  background-color: #e6f0ff;
}
</style>


 <button id="translit-toggle" class="translit-toggle shadow-sm">
  <div class="d-none d-sm-inline">Transliterate |</div>
  <span class="label-left">Київ</span>
  <span class="toggle-track">
    <span class="toggle-circle"></span>
  </span>
  <span class="label-right">Kyiv</span>
</button>

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
      this.classList.toggle('toggled');

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
