import { defineConfig } from 'vite'

export default defineConfig(env => ({
	base: env.mode === 'production' ? '/posobota-nextras-demo/' : '/',
}))
