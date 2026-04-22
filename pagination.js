// pagination.js
// Single config object to change pagination behavior in one place:
// - window.PAGINATION.enabled (true/false)
// - window.PAGINATION.pageSize (number)

window.PAGINATION = window.PAGINATION || { enabled: true, pageSize: 10 };
window._pageSize = window.PAGINATION.pageSize || 10;

function renderPage(page) {
    const lista = document.getElementById("lista");
    if (!lista) return;
    const items = window._henkilot || [];
    // If pagination is disabled, render all items and clear controls
    if (!window.PAGINATION || !window.PAGINATION.enabled) {
        lista.innerHTML = "";
        items.forEach(h => {
        lista.innerHTML += `
            <tr>
                <td>${h.id}</td>
                <td>${h.SSN || ''}</td>
                <td>${h.etunimi}</td>
                <td>${h.sukunimi}</td>
                <td>${h.sposti}</td>
                <td>${h.puhelin}</td>
                <td>${h.osoite}</td>
                <td>${h.postinumero}</td>
                <td>${h.kansallisuus}</td>
                <td>
                    <button onclick='profiili(${h.id})' id='ProfiiliPainike'>Profiili</button>
                    <button onclick='muokkaa(${JSON.stringify(h)})' id='MuokkaaPainike'>Muokkaa</button>
                    <button onclick='poista(${JSON.stringify(h)})' id='PoistaPainike'>Poista</button>
                </td>
            </tr>`;
        });
        const container = document.getElementById('pagination');
        if (container) container.innerHTML = '';
        return;
    }

    lista.innerHTML = "";
    const pageSize = (window.PAGINATION && window.PAGINATION.pageSize) || window._pageSize || 10;
    const total = items.length;
    const totalPages = Math.max(1, Math.ceil(total / pageSize));
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;
    window._currentPage = page;
    const start = (page - 1) * pageSize;
    const end = start + pageSize;
    const slice = items.slice(start, end);
    slice.forEach(h => {
        lista.innerHTML += `
            <tr>
                <td>${h.id}</td>
                <td>${h.SSN || ''}</td>
                <td>${h.etunimi}</td>
                <td>${h.sukunimi}</td>
                <td>${h.sposti}</td>
                <td>${h.puhelin}</td>
                <td>${h.osoite}</td>
                <td>${h.postinumero}</td>
                <td>${h.kansallisuus}</td>
                <td>
                    <button onclick='profiili(${h.id})' id='ProfiiliPainike'>Profiili</button>
                    <button onclick='muokkaa(${JSON.stringify(h)})' id='MuokkaaPainike'>Muokkaa</button>
                    <button onclick='poista(${JSON.stringify(h)})' id='PoistaPainike'>Poista</button>
                </td>
            </tr>`;
    });
    renderPaginationControls(totalPages);
}

function renderPaginationControls(totalPages) {
    let container = document.getElementById('pagination');
    if (!container) {
        container = document.createElement('div');
        container.id = 'pagination';
        container.style.marginTop = '8px';
        container.style.textAlign = 'center';
        const table = document.querySelector('table');
        if (table && table.parentNode) table.parentNode.insertBefore(container, table.nextSibling);
        else document.body.appendChild(container);
    }
    container.innerHTML = '';
    if (!window.PAGINATION || !window.PAGINATION.enabled) return;
    if (totalPages <= 1) return;

    const prev = document.createElement('button');
    prev.textContent = '‹ Prev';
    prev.style.marginRight = '6px';
    prev.onclick = () => { if (window._currentPage > 1) renderPage(window._currentPage - 1); };
    container.appendChild(prev);

    const maxButtons = 7;
    let start = Math.max(1, window._currentPage - Math.floor(maxButtons / 2));
    let end = Math.min(totalPages, start + maxButtons - 1);
    if (end - start + 1 < maxButtons) start = Math.max(1, end - maxButtons + 1);

    for (let p = start; p <= end; p++) {
        const btn = document.createElement('button');
        btn.textContent = p;
        btn.style.margin = '0 4px';
        if (p === window._currentPage) { btn.disabled = true; btn.style.fontWeight = '700'; }
        btn.onclick = (e) => { renderPage(p); };
        container.appendChild(btn);
    }

    const next = document.createElement('button');
    next.textContent = 'Next ›';
    next.style.marginLeft = '6px';
    next.onclick = () => { if (window._currentPage < totalPages) renderPage(window._currentPage + 1); };
    container.appendChild(next);
}

// helper to change page size at runtime (updates config and re-renders)
function setPageSize(n) {
    const size = parseInt(n, 10) || 10;
    window.PAGINATION = window.PAGINATION || {};
    window.PAGINATION.pageSize = size;
    window._pageSize = size;
    renderPage(1);
}

// helper to enable/disable pagination at runtime
function setPaginationEnabled(enabled) {
    window.PAGINATION = window.PAGINATION || {};
    window.PAGINATION.enabled = !!enabled;
    if (window.PAGINATION.enabled) renderPage(1);
    else {
        const lista = document.getElementById("lista");
        lista.innerHTML = "";
        (window._henkilot || []).forEach(h => {
            lista.innerHTML += `
            <tr>
                <td>${h.id}</td>
                <td>${h.SSN || ''}</td>
                <td>${h.etunimi}</td>
                <td>${h.sukunimi}</td>
                <td>${h.sposti}</td>
                <td>${h.puhelin}</td>
                <td>${h.osoite}</td>
                <td>${h.postinumero}</td>
                <td>${h.kansallisuus}</td>
                <td>
                    <button onclick='profiili(${h.id})' id='ProfiiliPainike'>Profiili</button>
                    <button onclick='muokkaa(${JSON.stringify(h)})' id='MuokkaaPainike'>Muokkaa</button>
                    <button onclick='poista(${JSON.stringify(h)})' id='PoistaPainike'>Poista</button>
                </td>
            </tr>`;
        });
        const container = document.getElementById('pagination');
        if (container) container.innerHTML = '';
    }
}
