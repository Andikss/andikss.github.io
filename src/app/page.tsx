import { About, Compaines, Hero, Skills } from "@/sections/Home";

export default function Home() {
  return (
    <main className="bg-main">
      <Hero/>
      <About/>
      <Compaines/>
      <Skills/>
    </main>
  );
}
