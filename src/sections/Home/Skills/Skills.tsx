'use client'

import { useState } from 'react';
import { Title, Tooltip } from '@/components/Global';
import Image from 'next/image';
import React from 'react';
import skillsData from './Skills.json';
import { SkillsInterface } from './SkillsInterface';
import { MdArrowUpward, MdArrowDownward } from 'react-icons/md';
import { ScrollAnimationWrapper } from '@/utils/Global/AnimationUtils'; 

const skills: SkillsInterface[] = skillsData;

export const Skills: React.FC = () => {
  const [showAll, setShowAll] = useState(false);
  const displayedSkills = showAll ? skills : skills.slice(0, 12);

  return (
    <div id="skills" className="bg-main h-auto w-full mb-20">
      <Title
        title="Skills"
        description="Toolkits that help me [complete] all of my [projects]"
      />
      <div className="grid gap-4 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 transition-all duration-500 ease-in-out overflow-hidden">
        {displayedSkills.map((skill, index) => (
          <ScrollAnimationWrapper
            key={index}
            direction={index % 2 === 0 ? 'left' : 'right'}
            duration={500 + index * 100} 
            delay={100 * index}
            triggerOffset={-200}
          >
            <a
              href={skill.url}
              target="_blank"
              rel="noopener noreferrer"
              className="cursor-pointer relative bg-secondary gap-3 flex justify-between flex-col items-center px-4 py-8 rounded shadow-xl text-center text-text hover:bg-accent hover:text-secondary transition duration-300 ease-in-out"
            >
              <Image
                src={skill.src}
                alt={skill.alt}
                width={80}
                height={80}
                className={skill.alt.toLowerCase() === 'react' ? 'animate-rotate' : ''}
              />
              <p className="text-lg">{skill.alt}</p>
            </a>
          </ScrollAnimationWrapper>
        ))}
      </div>

      {skills.length > 12 && (
        <div className="text-center mt-8 flex justify-center">
          <button
            onClick={() => setShowAll(!showAll)}
            className="relative bg-secondary text-accent px-6 py-3 rounded shadow-lg hover:text-secondary hover:bg-accent transition duration-300 ease-in-out flex items-center justify-center"
          >
            {showAll ? (
              <>
                <MdArrowUpward className="mr-2" /> Show Less
              </>
            ) : (
              <Tooltip hasArrow position="top" label="Let`s see what else I can do!">
                <div className="flex items-center">
                  <MdArrowDownward className="mr-2" /> Show More
                </div>
              </Tooltip>
            )}
          </button>
        </div>
      )}
    </div>
  );
};
