# Tulip Blocks

Blocks for the [Tulip](../../README.md) theme. Tulip itself registers no blocks (see `docs/decisions.md`, 2026-10-08): anything that core blocks, patterns and section styles can't do lives here.

The blocks take colours, type and radii from Tulip's roles (`base`, `contrast`, `primary`, `accent`…) and section styles, so they look right in any Tulip child theme and have no colour settings of their own.

## Develop

```bash
cd plugins/tulip-blocks
npm install
npm start        # rebuilds build/ on every change
```

The repo's `.wp-env.json` mounts this folder, so `npm start` at the repo root gives a local site with Tulip and the plugin active. The plugin only loads what is in `build/`: run `npm run build` (or keep `npm start` running) before testing.

## Add a block

One folder per block in `src/`, named after the block (`src/step-carousel/` → `tulip/step-carousel`), with its `block.json`. `tulip-blocks.php` registers every `build/*/block.json`, so there's nothing to add there.

## Release

Not set up yet. `build/` is not committed: it will be built by the release workflow.
