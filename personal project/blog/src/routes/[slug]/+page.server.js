import semua_tulisan from '../../tiddlers/published.json';

export function load({ params }) {
	const postingan = semua_tulisan.find((x) => x.slug == params.slug);
	return { postingan };
}
