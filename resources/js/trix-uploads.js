/**
 * Inline image uploads for Trix rich-text editors.
 *
 * Any <trix-editor data-upload-url="..."> on the page will upload pasted or
 * attached images to that endpoint and replace the attachment with the
 * returned URL. The endpoint must return JSON: { url: "..." }.
 */
document.addEventListener('trix-attachment-add', (event) => {
    const attachment = event.attachment;

    if (!attachment.file) {
        return;
    }

    const uploadUrl = event.target?.dataset?.uploadUrl;

    if (!uploadUrl) {
        return;
    }

    const token = document.querySelector('meta[name="csrf-token"]')?.content;
    const data = new FormData();
    data.append('file', attachment.file);

    fetch(uploadUrl, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            Accept: 'application/json',
        },
        body: data,
    })
        .then((response) => response.json())
        .then((result) => attachment.setAttributes({ url: result.url, href: result.url }))
        .catch(() => attachment.remove());
});
